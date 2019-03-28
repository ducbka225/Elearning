<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ex1;
use App\Ex2;
use App\Ex3;
use App\Ex4;

class BaiTapController extends Controller
{
 	function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getEx1($lesson_id){

        $ex1 =  Ex1::where('id_lesson', $lesson_id)->get();
        return view('page.baitap.ex1', compact('ex1'));
    }

    public function getEx2($lesson_id){
        
        return view('page.baitap.ex2');
    }

    public function getEx3($lesson_id){
        
        return view('page.baitap.ex3');
    }

    public function getEx4($lesson_id){
        
        return view('page.baitap.ex4');
    }
}
