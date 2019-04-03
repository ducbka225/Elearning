<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;
use Auth;
use App\Ex1;
use App\Ex2;
use App\Ex3;
use App\Ex4;

class TeacherController extends Controller
{
    public function getLogin(){
    	return view('teacher.pages.login');
    }

    public function getCourse(){
    	$listCourse = Course::all();
    	return view('teacher.pages.listcourse', compact('listCourse'));
    }

    public function getLesson($course_id){
    	$listLesson = Lesson::where('id_course', $course_id)->get();
    	return view('teacher.pages.listlesson', compact('listLesson', 'course_id'));
    }

    public function getAddLesson($course_id){

        return view('teacher.pages.addlesson', compact('course_id'));
    }

    public function postAddLesson($course_id, Request $req){

        $lesson = new Lesson;
        $lesson->id_course = $course_id;
        $lesson->lesson_number = $req->txtLessonNumber;
        $lesson->name = $req->txtName;
        $lesson->video = $req->txtVideo;
        $lesson->sumary = $req->txtSummary;
        $lesson->save();
        return redirect()->route('listlesson', $course_id)->with('message', 'Thêm Thành Công');
    }

    public function DeleteLesson($lesson_id){
        $lesson = Lesson::find($lesson_id);
        $lesson->delete();
        return redirect()->back()->with('message', 'Xóa Thành Công');
    }

    public function getBaiTap($lesson_id){
        $ex1 = Ex1::where('id_lesson', $lesson_id)->get();
        $ex2 = Ex2::where('id_lesson', $lesson_id)->get();
        $ex3 = Ex3::where('id_lesson', $lesson_id)->get();
        $ex4 = Ex4::where('id_lesson', $lesson_id)->get();
        return view('teacher.pages.listex', compact('ex1', 'ex2', 'ex3','ex4', 'lesson_id'));
    }

//////////////////////////////////////////////
    public function getThemex1($lesson_id){
        return view('teacher.pages.thembaitap.addex1', compact('lesson_id'));
    }
    public function getThemex2($lesson_id){
        return view('teacher.pages.thembaitap.addex2', compact('lesson_id'));
    }
    public function getThemex3($lesson_id){
        return view('teacher.pages.thembaitap.addex3', compact('lesson_id'));
    }
    public function getThemex4($lesson_id){
        return view('teacher.pages.thembaitap.addex4', compact('lesson_id'));
    }


    public function postThemex1($lesson_id, Request $req){
        $ex1 = new Ex1;
        $ex1->id_lesson = $lesson_id;
        if($req->hasFile('filename')){
            $file = $req->File('filename');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'mp3'){
                return redirect()->back()->with('error', 'file không đúng định dạng');
            }

            $savefile = str_random(4)."_".$name;
            while(file_exists("source/assets/audio/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/assets/audio/", $savefile);
            $ex1->file = $savefile;  
        }
        else{
            $ex1->file = "";
        }       
        $ex1->save();
        return redirect()->back()->with('success', 'Thêm Thành công');
    }

    public function postThemex2($lesson_id, Request $req){
        $ex2 = new Ex2;
        $ex2->id_lesson = $lesson_id;
        if($req->hasFile('filename')){
            $file = $req->File('filename');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'mp3'){
                return redirect()->back()->with('error', 'file không đúng định dạng');
            }

            $savefile = str_random(4)."_".$name;
            while(file_exists("source/assets/audio/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/assets/audio/", $savefile);
            $ex2->file = $savefile;  
        }
        else{
            $ex2->file = "";
        }       
        $ex2->save();
        return redirect()->back()->with('success', 'Thêm Thành công');
        
    }
    public function postThemex3($lesson_id, Request $req){
        $ex3 = new Ex3;
        $ex3->id_lesson = $lesson_id;
        $ex3->Content = $req->txtcontent;
        $ex3->Correct = $req->txtcorrect;
        $ex3->save();
        return redirect()->back()->with('success', 'Thêm Thành công');
        
    }
    public function postThemex4($lesson_id, Request $req){
        $ex4 = new Ex4;
        $ex4->id_lesson = $lesson_id;
        if($req->hasFile('filename')){
            $file = $req->File('filename');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'docx'){
                return redirect()->back()->with('error', 'file không đúng định dạng');
            }

            $savefile = str_random(4)."_".$name;
            while(file_exists("source/assets/file/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/assets/file/", $savefile);
            $ex4->answer = $savefile;  
        }
        else{
            $ex4->answer = "";
        }       
        $ex4->save();
        return redirect()->back()->with('success', 'Thêm Thành công');
        
    }
////////////////////////////////////////////////////

    public function postLogin(Request $request){    
           $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
                
            ],
            [
                'email.required'=>'Vui lòng nhập email!',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
            ]
        );
        
        $user = array('email'=>$request->email, 'password'=>$request->password, 'role'=>$request->role);
        if(Auth::attempt($user)){
            return redirect('/teacher/course');
        }

        else{
            return redirect('/teacher/login')->with('message','Đăng Nhập thất bại');
        }
        
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/teacher/login');
    }
}
