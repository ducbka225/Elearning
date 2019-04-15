<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Course;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function getAddCourse(){
    	$category = Category::all();
    	return view('admin.addcourse', compact('category'));
    }

    public function postAddCourse(Request $req){
    	$course = new Course;
    	$course->course_number = $req->course_number;
    	$course->title = $req->title;
    	$course->lenght = $req->lenght;
    	$course->price = $req->price;
    	$course->promotion_price = 0;
    	$course->course_rate = 5;
    	$course->level = 1;
    	$course->id_category = $req->category;
    	$course->id_user = Auth::user()->id;

    	if($req->hasFile('course_avatar')){
            $file = $req->File('course_avatar');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi == 'jpg' || $duoi == 'png'){
                $savefile = str_random(4)."_".$name;
            while(file_exists("source/assets/img/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/assets/img/", $savefile);
            $course->course_avatar = $savefile;  
            }

            else{

                return redirect()->back()->with('loi', 'file không đúng định dạng');
            }
    
        }
        else{
            $course->course_avatar = "";
        } 
        $course->save();

    	return redirect('/teacher/course')->with('message', 'Thêm thành công!');
    }

    public function getAddUser(){
    	return view('admin.adduser');
    }

    public function postAddUser(Request $req){
    	$user = new User;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->exp = $req->exp;
    	$user->password = \Hash::make($req->password);
    	$user->address = $req->address;
    	$user->phone_number = $req->phone;
    	$user->balance = 0;
    	$user->save();
    	return redirect('admin/user')->with('message','Them Thành Công!');
    }

    public function deleteUser($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->back()->with('message', 'Đã Xóa!');
    }

    public function getCategory(){
    	$category = Category::all();
    	return view('admin.listcategory', compact('category'));
    }

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/listcategory')->with('message', ' Đã Xóa');
    }

    public function getAddCategory(){
        return view('admin.addcategory');
    }

    public function postAddCategory(Request $req){
    	$category = new Category;
    	$category->name = $req->name;
    	$category->save();
    	return redirect('/admin/listcategory')->with('message', 'Thêm Thành Công!');
    }
}
