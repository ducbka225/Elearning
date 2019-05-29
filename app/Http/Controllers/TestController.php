<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Mid_Test;
use App\Course;
use App\Mid_Test_Result;
use App\End_Test;
use App\End_Test_Result;
use Auth;
use DB;
use App\Test_result;
use App\Score;
use App\User;
use App\Test;

class TestController extends Controller
{
	function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getMidTest($course_id){
    	$course = Course::where('id', $course_id)->first();
    	$mid_test = Mid_Test::where('id_course', $course_id)->orderby('id')->get();
    	$countquestion = $mid_test->count('id');
    	return view('page.test.mid_test', compact('course', 'mid_test', 'countquestion'));
    }

    public function postMidTest(Request $req){

    	$course = Course::where('id', $req->course)->first();
    	foreach ($req->input('questions', []) as $key => $question) {
            Mid_Test_Result::create([
                'id_user' => Auth::User()->id,
                'id_midtest' => $question,
                'keychoose' => $req->input('answers.'.$question),
            ]);
        }
        return redirect()->route('mid-test-result', [$course->id]);
    }

    public function getMidTestResult($course_id){
    	$id_user = Auth::id();
    	$mid_test = Mid_Test::where('id_course', $course_id)->orderby('id')->get();
    	$id_midtest_first = $mid_test->first()->id;
    	$mid_test_result = Mid_Test_Result::where('id_midtest',$id_midtest_first)
											->where('id_user', $id_user)->first();
    	$countquestion = $mid_test->count('id');
    	// $counttrue = DB::table('mid_test')
     //        ->join('mid_test_result','mid_test.id','=','mid_test_result.id_midtest')
     //        ->where(['mid_test.id_course' => $course_id, 'mid_test_result.id_user' => $id_user])
     //        ->where('mid_test.keytrue', '=','mid_test_result.keychoose')
     //        ->select('mid_test.id')
     //        ->orderBy('id')->get()->count('id');

        $result = DB::table('mid_test')
            ->join('mid_test_result','mid_test.id','=','mid_test_result.id_midtest')
            ->where(['mid_test.id_course' => $course_id, 'mid_test_result.id_user' => $id_user])
            ->select('mid_test.id as id', 'mid_test.content as content', 'mid_test.keya as keya', 'mid_test.keyb as keyb', 'mid_test.keyc as keyc', 'mid_test.keyd as keyd', 'mid_test.keytrue as keytrue', 'mid_test_result.keychoose as keychoose')
            ->orderBy('id')->get();
        
        $counttrue = 0;
        foreach($result as $r){
        	if($r->keychoose == $r->keytrue){
        		$counttrue += 1; 
        	}
        }
        
    	return view('page.test.mid_test_result', compact('countquestion', 'counttrue', 'mid_test_result', 'result'));
    }

    //end test
    public function getEndTest($course_id){
        $course = Course::where('id', $course_id)->first();
        $end_test = End_Test::where('id_course', $course_id)->orderby('id')->get();
        $countquestion = $end_test->count('id');
        return view('page.test.end_test', compact('course', 'end_test', 'countquestion'));
    }

    public function postEndTest(Request $req){

        $course = Course::where('id', $req->course)->first();
        foreach ($req->input('questions', []) as $key => $question) {
            End_Test_Result::create([
                'id_user' => Auth::User()->id,
                'id_endtest' => $question,
                'keychoose' => $req->input('answers.'.$question),
            ]);
        }
        return redirect()->route('end-test-result', [$course->id]);
    }

    public function getEndTestResult($course_id){
        $id_user = Auth::id();
        $end_test = End_Test::where('id_course', $course_id)->orderby('id')->get();
        $id_endtest_first = $end_test->first()->id;
        $end_test_result = End_Test_Result::where('id_endtest',$id_endtest_first)
                                            ->where('id_user', $id_user)->first();
        $countquestion = $end_test->count('id');
        // $counttrue = DB::table('mid_test')
     //        ->join('mid_test_result','mid_test.id','=','mid_test_result.id_midtest')
     //        ->where(['mid_test.id_course' => $course_id, 'mid_test_result.id_user' => $id_user])
     //        ->where('mid_test.keytrue', '=','mid_test_result.keychoose')
     //        ->select('mid_test.id')
     //        ->orderBy('id')->get()->count('id');

        $result = DB::table('end_test')
            ->join('end_test_result','end_test.id','=','end_test_result.id_endtest')
            ->where(['end_test.id_course' => $course_id, 'end_test_result.id_user' => $id_user])
            ->select('end_test.id as id', 'end_test.content as content', 'end_test.keya as keya', 'end_test.keyb as keyb', 'end_test.keyc as keyc', 'end_test.keyd as keyd', 'end_test.keytrue as keytrue', 'end_test_result.keychoose as keychoose')
            ->orderBy('id')->get();
        
        $counttrue = 0;
        foreach($result as $r){
            if($r->keychoose == $r->keytrue){
                $counttrue += 1; 
            }
        }
        
        return view('page.test.end_test_result', compact('countquestion', 'counttrue', 'end_test_result', 'result'));
    }

    //thithu
    public function gettest(){
        $test = Test::orderByRaw("RAND()")->limit(2)->get();
        return view('page.thithu.test', compact( 'test'));
    }

    public function posttest(Request $req){
        $times = random_int(1 , 10000);
        foreach ($req->input('questions', []) as $key => $question) {
            Test_Result::create([
                'id_user' => Auth::User()->id,
                'id_test' => $question,
                'answer' => $req->input('answerss.'.$question),
                'times' => $times,
            ]);
        }
        $id_user= Auth::id();
        $result = DB::table('tests')
            ->join('test__results','tests.id','=','test__results.id_test')
            ->where(['test__results.id_user' => $id_user, 'test__results.times' => $times])
            ->select('tests.id as id', 'tests.content as content', 'tests.a as a', 'tests.b as b', 'tests.c as c', 'tests.d as d', 'tests.true as true', 'test__results.answer as answer')
            ->orderBy('id')->get();
        
        $counttrue = 0;
        foreach($result as $r){
            if($r->answer == $r->true){
                $counttrue += 1; 
            }
        }
        
        $counttrue = 0;
        foreach($result as $r){
            if($r->answer == $r->true){
                $counttrue += 1; 
            }
        }

        $score = Score::where('id_user', $id_user)->first();
        if($score == null) {
            $score= new Score();
            $score->id_user= Auth::id();
            $score->total=$counttrue;
            $score->save();
            return redirect()->route('result', [$times]);
        }
        else{
            if($score->total > $counttrue){
                return redirect()->route('result', [$times]);
            }  

            else{
                $score->total=$counttrue;
                $score->save();
                return redirect()->route('result', [$times]);
            }
        }  
    }

    public function gettestresult($times){
        $id_user = Auth::id();
        $test = Test::orderby('id')->get();
        $id_test_first = $test->first()->id;
        $test_result = Test_Result::where('id_test',$id_test_first);

        $result = DB::table('tests')
            ->join('test__results','tests.id','=','test__results.id_test')
            ->where(['test__results.id_user' => $id_user, 'test__results.times' => $times])
            ->select('tests.id as id', 'tests.content as content', 'tests.a as a', 'tests.b as b', 'tests.c as c', 'tests.d as d', 'tests.true as true', 'test__results.answer as answer')
            ->orderBy('id')->get();
        
        $counttrue = 0;
        foreach($result as $r){
            if($r->answer == $r->true){
                $counttrue += 1; 
            }
        }
        return view('page.thithu.result', compact('counttrue', 'test_result', 'result'));
    }
}
