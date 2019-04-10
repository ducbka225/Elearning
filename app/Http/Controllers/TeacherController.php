<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;
use Auth;
use DB;
use App\User;
use App\Ex1;
use App\Ex2;
use App\Ex3;
use App\Ex4;
use App\Submit_Ex1;
use App\Submit_Ex2;
use App\Submit_Ex3;
use App\Submit_Ex4;
use App\Comment;
use App\Re_comment;

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

    // list Student
    public function getStudent(){
        $student = User::where('role', 0)->get();
        return view('teacher.pages.liststudent', compact('student'));
    }

    // chấm bài
    public function getChamBai($lesson_id){
        return view('teacher.pages.chambai', compact('lesson_id'));
    }

    public function getChamBaiEx1($lesson_id){
        $student = User::where('role', 0)->get();
        $ex1 = Ex1::where('id_lesson', $lesson_id)->get();
        return view('teacher.pages.chambai.ex1', compact('ex1', 'lesson_id', 'student'));
    }

    public function getChamBaiEx2($lesson_id){
        $student = User::where('role', 0)->get();
        $ex2 = Ex2::where('id_lesson', $lesson_id)->get();
        return view('teacher.pages.chambai.ex2', compact('ex2', 'lesson_id', 'student'));
    }

    public function getChamBaiEx4($lesson_id){
        $student = User::where('role', 0)->get();
        $ex4 = Ex4::where('id_lesson', $lesson_id)->get();
        return view('teacher.pages.chambai.ex4', compact('ex4', 'lesson_id', 'student'));
    }

    //ex1
    public function getChamBaiEx1ByUser($lesson_id, $user_id){
        $join_table = DB::table('submit_ex1')
            ->join('ex1','ex1.id','=','submit_ex1.id_ex1')
            ->where(['ex1.id_lesson' => $lesson_id, 'submit_ex1.id_user' => $user_id])
            ->select('submit_ex1.*', 'ex1.file')
            ->get();    
            // dd($join_table);
            
        return view('teacher.pages.chambai.ex1_user', compact('join_table'));
    }

    public function postChamBaiEx1($submit_id, Request $req){
        $submit_ex1 = Submit_Ex1::where('id', $submit_id)->first();
        $submit_ex1->result = $req ->result;
        $submit_ex1->save();
        return redirect()->back();
    }

    // ex2

    public function getChamBaiEx2ByUser($lesson_id, $user_id){
        $join_table = DB::table('submit_ex2')
            ->join('ex2','ex2.id','=','submit_ex2.id_ex2')
            ->where(['ex2.id_lesson' => $lesson_id, 'submit_ex2.id_user' => $user_id])
            ->select('submit_ex2.*', 'ex2.file')
            ->get();    
            
        return view('teacher.pages.chambai.ex2_user', compact('join_table'));
    }

    public function postChamBaiEx2($submit_id, Request $req){
        $submit_ex2 = Submit_Ex2::where('id', $submit_id)->first();
        $submit_ex2->result = $req ->result;
        $submit_ex2->save();
        return redirect()->back();
    }

    // ex4

    public function getChamBaiEx4ByUser($lesson_id, $user_id){
        $join_table = DB::table('submit_ex4')
            ->join('ex4','ex4.id','=','submit_ex4.id_ex4')
            ->where(['ex4.id_lesson' => $lesson_id, 'submit_ex4.id_user' => $user_id])
            ->select('submit_ex4.*', 'ex4.file')
            ->get();    
            
        return view('teacher.pages.chambai.ex4_user', compact('join_table'));
    }

    public function postChamBaiEx4($submit_id, Request $req){
        $submit_ex4 = Submit_Ex4::where('id', $submit_id)->first();
        $submit_ex4->result = $req ->result;
        $submit_ex4->save();
        return redirect()->back();
    }

    public function downloadEx4($id)
    {
        $dl =  Submit_Ex4::where('id', $id)->first();
        $fileNameGenerate = 'baitap';
        $file_path = Public_path('source/assets/file/'.$dl->file);
        $headers = array(
            'Content-Type: application/docx',
        );
        try 
        {
            return response()->download($file_path, $fileNameGenerate . '.' . 'docx', $headers);
        } 
        catch (Exception $e) 
        {
            //Error
            return redirect()->back()->with('error', trans('locale.file_does_not_exists'));
        }

    }


    //Comment
    public function getComment($lesson_id){
        $comment = Comment::where('id_lesson', $lesson_id)->get();
        return view('teacher.pages.comment', compact('comment'));
    }

    public function postComment($Comment_id, Request $req){
        $recomment = new Re_comment;
        $recomment->content = $req->content;
        $recomment->id_user = Auth::user()->id;
        $recomment ->id_comment = $Comment_id;
        $recomment->save();
        return redirect()->back()->with('message', 'Thành Công');
    }

    public function getXoaComment($comment_id){
        $recomment = Re_comment::where('id_comment', $comment_id)->get();
        $recomment->delete();
        
        $comment = Comment::where('id', $comment_id)->first();
        $comment->delete();
        return redirect()->back()->with('message', 'Đã xóa');
    }
}   
