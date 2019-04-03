<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;
use Auth;

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
