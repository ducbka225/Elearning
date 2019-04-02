<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ex1;
use App\Ex2;
use App\Ex3;
use App\Ex4;
use Auth;
use DB;
use App\Submit_Ex1;
use App\Submit_Ex2;
use App\Submit_Ex3;
use App\Submit_Ex4;

class BaiTapController extends Controller
{
 	function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getEx1($lesson_id){
        $count_question = Ex1::where('id_lesson', $lesson_id)->count('id');
        $number_question = 1;
        $ex1 =  Ex1::where('id_lesson', $lesson_id)->orderBy('id')->first();
        $ex1_id = $ex1->id;
        $id_ex1 = $ex1->id + 1;
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex1')
            ->join('submit_ex1','ex1.id','=','submit_ex1.id_ex1')
            ->where(['ex1.id' => $ex1_id, 'submit_ex1.id_user' => $user_id])
            ->select('submit_ex1.answer', 'submit_ex1.id', 'submit_ex1.id_ex1', 'ex1.file')
            ->orderBy('id')->first();
        return view('page.baitap.ex1', compact('ex1', 'join_table', 'number_question', 'id_ex1', 'count_question'));
    }

    public function getEx1ById($ex1_id, $number, $count){
        $ex1 =  Ex1::where('id', $ex1_id)->first();
        $id_ex1 = $ex1_id + 1;
        $number_question = $number + 1 ;
        $check = 0;
        if($number_question < $count){
            $check = 1;
        }
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex1')
            ->join('submit_ex1','ex1.id','=','submit_ex1.id_ex1')
            ->where(['ex1.id' => $ex1_id, 'submit_ex1.id_user' => $user_id])
            ->select('submit_ex1.answer', 'submit_ex1.id', 'submit_ex1.id_ex1', 'ex1.file')
            ->orderBy('id')->first();
        return view('page.baitap.ex1byid', compact('ex1', 'join_table', 'number_question', 'id_ex1', 'check', 'count'));
    }

    public function getEx2($lesson_id){
        
        $count_question = Ex2::where('id_lesson', $lesson_id)->count('id');
        $number_question = 1;
        $ex2 =  Ex2::where('id_lesson', $lesson_id)->orderBy('id')->first();
        $ex2_id = $ex2->id;
        $id_ex2 = $ex2->id + 1;
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex2')
            ->join('submit_ex2','ex2.id','=','submit_ex2.id_ex2')
            ->where(['ex2.id' => $ex2_id, 'submit_ex2.id_user' => $user_id])
            ->select('submit_ex2.answer', 'submit_ex2.id', 'submit_ex2.id_ex2', 'ex2.file')
            ->orderBy('id')->first();
        return view('page.baitap.ex2', compact('ex2', 'join_table', 'number_question', 'id_ex2', 'count_question'));
    }

    public function getEx2ById($ex2_id, $number, $count){
        $ex2 =  Ex2::where('id', $ex2_id)->first();
        $id_ex2 = $ex2_id + 1;
        $number_question = $number + 1 ;
        $check = 0;
        if($number_question < $count){
            $check = 1;
        }
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex2')
            ->join('submit_ex2','ex2.id','=','submit_ex2.id_ex2')
            ->where(['ex2.id' => $ex2_id, 'submit_ex2.id_user' => $user_id])
            ->select('submit_ex2.answer', 'submit_ex2.id', 'submit_ex2.id_ex2', 'ex2.file')
            ->orderBy('id')->first();
        return view('page.baitap.ex2byid', compact('ex2', 'join_table', 'number_question', 'id_ex2', 'check', 'count'));
    }

    public function getEx3($lesson_id){
        
        $count_question = Ex3::where('id_lesson', $lesson_id)->count('id');
        $number_question = 1;
        $ex3 =  Ex3::where('id_lesson', $lesson_id)->orderBy('id')->first();
        $ex3_id = $ex3->id;
        $id_ex3 = $ex3->id + 1;
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex3')
            ->join('submit_ex3','ex3.id','=','submit_ex3.id_ex3')
            ->where(['ex3.id' => $ex3_id, 'submit_ex3.id_user' => $user_id])
            ->select('submit_ex3.answer', 'submit_ex3.id', 'submit_ex3.id_ex3', 'ex3.Content')
            ->orderBy('id')->first();
        return view('page.baitap.ex3', compact('ex3', 'join_table', 'number_question', 'id_ex3', 'count_question'));
    }

    public function getEx3ById($ex3_id, $number, $count){
        $ex3 =  Ex3::where('id', $ex3_id)->first();
        $id_ex3 = $ex3_id + 1;
        $number_question = $number + 1 ;
        $check = 0;
        if($number_question < $count){
            $check = 1;
        }
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex3')
            ->join('submit_ex3','ex3.id','=','submit_ex3.id_ex3')
            ->where(['ex3.id' => $ex3_id, 'submit_ex3.id_user' => $user_id])
            ->select('submit_ex3.answer', 'submit_ex3.id', 'submit_ex3.id_ex3', 'ex3.Content')
            ->orderBy('id')->first();
        return view('page.baitap.ex3byid', compact('ex3', 'join_table', 'number_question', 'id_ex3', 'check', 'count'));
    }

    public function getEx4($lesson_id){
        $ex4 =  Ex4::where('id_lesson', $lesson_id)->orderBy('id')->first();
        $ex4_id = $ex4->id;
        $user_id = Auth::user()->id;
        $join_table = DB::table('ex4')
            ->join('submit_ex4','ex4.id','=','submit_ex4.id_ex4')
            ->where(['ex4.id' => $ex4_id, 'submit_ex4.id_user' => $user_id])
            ->select('submit_ex4.answer', 'submit_ex4.id', 'submit_ex4.id_ex4', 'ex4.file')
            ->orderBy('id')->first();
            // dd($ex4_id);
        return view('page.baitap.ex4', compact('ex4', 'join_table', 'ex4_id'));
    }

    public function downloadEx4($ex4_id)
    {
        $ex4 =  Ex4::where('id', $ex4_id)->first();

    }


    public function postEx1($ex1_id, Request $req){
        $submit_ex1 = new Submit_Ex1;
        $submit_ex1->id_user = Auth::user()->id;
        $submit_ex1->id_ex1 = $ex1_id;
        $submit_ex1->result = "0"; 
        if($req->hasFile('filename')){
            $file = $req->File('filename');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'mp3'){
                return redirect()->back()->with('loi', 'file không đúng định dạng');
            }

            $savefile = str_random(4)."_".$name;
            while(file_exists("source/assets/audio/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/assets/audio/", $savefile);
            $submit_ex1->answer = $savefile;  
            echo $savefile;  
        }
        else{
            $submit_ex1->answer = "";
        }       
        $submit_ex1->save();
        return redirect()->back();
    }

     public function postEx2($ex2_id, Request $req){
        $submit_ex2 = new Submit_Ex2;
        $submit_ex2->id_user = Auth::user()->id;
        $submit_ex2->id_ex2 = $ex2_id;
        $submit_ex2->result = "0"; 
        $submit_ex2->answer = $req->answer;
        $submit_ex2->save();
        return redirect()->back();
    }

    public function postEx3($ex3_id, Request $req){
        $ex3 = Ex3::where('id', $ex3_id)->first();
        $submit_ex3 = new Submit_Ex3;
        $submit_ex3->id_user = Auth::user()->id;
        $submit_ex3->id_ex3 = $ex3_id;
        $submit_ex3->answer = $req->answer;
        if($req->answer == $ex3->Correct){
            $submit_ex3->result = "1"; 
        }
        else{
            $submit_ex3->result = "0"; 
        }
        $submit_ex3->save();
        return redirect()->back();
    }
}
