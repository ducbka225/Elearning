<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Course;
use App\Lesson;
use App\Register;
use App\FeedBack;
use App\User_Lesson;
use App\Mid_Test;
use App\Mid_Test_Result;
use Auth;
use DB;
class PageController extends Controller
{
    function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getIndex(){
        $hotcourse = Course::where('level', 1)->get();
        $teacher = User::where('role', 1)->get();
    	return view('page.trangchu', compact('hotcourse', 'teacher'));
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
        $user->avatar = "avatar.jpg";
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
        $checkstudent = Register::where('id_course', $courseid)->where('id_user', Auth::User()->id)->first();
        return view('page.chitiet_course', compact('chitietcourse', 'lesson', 'count_student', 'checkstudent'));
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
        $check_lesson = User_Lesson::where('id_user', Auth::User()->id)->where('id_lesson', $lesson_id)->count('id');
        // $user_lesson = User_Lesson::where('id_user', Auth::User()->id)->get();
        $user_lesson = User_Lesson::select('id_lesson')
            ->where('id_user', Auth::User()->id)
            ->orderBy('id', 'desc')
            ->get();
        $inputs = $user_lesson->pluck('id_lesson')->toArray();
        // dd($inputs);
        $count_student = Register::where('id_course', $course_id)->count('id_user');

        $id_user = Auth::id();
        $mid_test = Mid_Test::where('id_course', $course_id)->orderby('id')->get();
        $id_midtest_first = $mid_test->first()->id;
        $mid_test_result = Mid_Test_Result::where('id_midtest',$id_midtest_first)
                                            ->where('id_user', $id_user)->count('id');

        return view('page.lesson', compact('chitietcourse', 'lesson', 'lessonshow', 'count_student', 'user_lesson', 'check_lesson', 'inputs', 'mid_test_result'));
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

    public function postUpdateInfo(Request $req){
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $req->name;
        $user->address = $req->address;
        $user->phone_number = $req->phone;

        if($req->hasFile('avatar')){
            $file = $req->File('avatar');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi == 'jpg' || $duoi == 'png'){
                $savefile = str_random(4)."_".$name;
            while(file_exists("source/assets/img/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/assets/img/", $savefile);
            $user->avatar = $savefile;  
            }

            else{

                return redirect()->back()->with('loi', 'file không đúng định dạng');
            }
    
        }
        else{
            $user->avatar = $user->avatar;
        }  
        $user->save();     

        return redirect()->back()->with('message', 'Cập Nhật Thành Công!');
    }

    public function getUpdateInfo(){
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('page.update_info', compact('user'));
    }

    public function getChangePassword(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('page.changepassword', compact('user'));
    }

    public function postChangePassword(Request $req){
        $id = Auth::user()->id;
        $user = User::find($id);

        if(\Hash::check($req->oldpassword, $user->password)){

            if($req->password == $req->repassword){
                $user->password == \Hash::make($req->password);
            }
                
            else{
                return redirect()->back()->with('loi', 'Mật khẩu nhập lại không khớp!');
            }  
        }
        else{
            return redirect()->back()->with('loi', 'Mật khẩu cũ không chính xác');
        }
        $user->save();

        return redirect()->back()->with('message', 'Đổi mật khẩu thành công!');
    }

    public function getCourseJoin(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $register = Register::where('id_user', $id)->get();
        return view('page.coursejoin', compact('user', 'register'));
    }

    public function getTeacher(){

        $teacher = User:: where('role', '1')->get();
        return view('page.teacher', compact('teacher'));
    }

    public function getNapTien(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('page.naptien', compact('user'));
    }

    public function postNapTien(Request $req){
        $user = User::where('id', Auth::User()->id)->first();
        if($req->seri != 123123 || $req->cardnumber != 123123){
            return redirect('student/naptien')->with('loi', 'Thẻ không hợp lệ');
        }
        $user->balance = $req->balance;
        $user->save();
        return redirect('student/info')->with('message', 'Đã Nạp Tiền Vào Tài Khoản');
    }

    public function getContact(){
        return view('page.contact');
    }

    public function postContact(Request $req){
        $contact = new FeedBack;
        $contact->name = $req->name;
        $contact->phone = $req->phone;
        $contact->email = $req->email;
        $contact->content= $req->content;
        $contact->save();
        return redirect()->back()->with('message', 'Đã gửi phản hồi');
    }

    public function getDoneLesson($id){
        $user_lesson = new User_Lesson;
        $user_lesson->progress = 1;
        $user_lesson->id_lesson = $id;
        $user_lesson->id_user = Auth::User()->id;
        $user_lesson->save();
        return redirect()->back();
    }
}
