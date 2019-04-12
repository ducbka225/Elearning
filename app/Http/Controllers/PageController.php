<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Course;
use App\Lesson;
use App\Register;
use Auth;
class PageController extends Controller
{
    function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getIndex(){
        $hotcourse = Course::where('level', 1)->get();
    	return view('page.trangchu', compact('hotcourse', $hotcourse));
    }

    public function getSignup(){
    	return view('page.signup');
    }

    public function postSignup(Request $req){
    	$this->validate($req,
            [
                'email'=>'required|email|unique:users,Email',
                'password'=>'required|min:6',
                'username'=>'required',
                'repassword'=>'required|same:password'
                
            ],
            [
                'email.required'=>'Vui lòng nhập email!',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'repassword.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
                'username.required'=>'Vui lòng nhập Họ tên'
            ]
        );
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->address = "Hà Nội";
        $user->role = 0;
        $user->password = \Hash::make($req->password);
        $user->save();
        return redirect('signup')->with('success', 'Tạo tài khoản thành công!');
    }

    // khóa học theo loại
    public function getCourse($category){
        $coursebycat = Course::where('id_category', $category)->get();
        $categorybyid = Category::where('id', $category)->first();
        return view('page.course', compact('coursebycat', 'categorybyid'));
    }

    //chi tiết khoá học
    public function getChiTiet($courseid){
        $chitietcourse = Course::where('id', $courseid)->first();
        $lesson = Lesson::where('id_course', $courseid)->get();
        $count_student = Register::where('id_course', $courseid)->count('id_user');
        return view('page.chitiet_course', compact('chitietcourse', 'lesson', 'count_student'));
    }

    public function getLessonFirst($course_id){
        $chitietcourse = Course::where('id', $course_id)->first();
        $lesson = Lesson::where('id_course', $course_id)->get();
        $lessonshow = Lesson::where('id_course', $course_id)->orderBy('id')->first();
        $count_student = Register::where('id_course', $course_id)->count('id_user');
        return view('page.lessonfirst', compact('chitietcourse', 'lesson', 'lessonshow', 'count_student'));
    }

    public function getLesson($lesson_id){
        $lessonshow = Lesson::where('id', $lesson_id)->first();
        $course_id = $lessonshow->id_course;
        $chitietcourse = Course::where('id', $course_id)->first();
        $lesson = Lesson::where('id_course', $course_id)->get();
        $count_student = Register::where('id_course', $course_id)->count('id_user');
        return view('page.lesson', compact('chitietcourse', 'lesson', 'lessonshow', 'count_student'));
    }

    public function getCallVideo(){
        return view('page.callvideo');
    }

    public function getStudentInfo(){

        $id = Auth::user()->id;
        $user = User::find($id);

        $register = Register::where('id_user', $id)->get();

        return view('page.info', compact('user', 'register'));
    }

    public function getTeacher(){

        $teacher = User:: where('role', '1')->get();
        return view('page.teacher', compact('teacher'));
    }

}
