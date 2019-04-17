<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use App\User;
use Auth;
class ChatController extends Controller
{
	function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getChat($course_id){
    	$id_user = Auth::User()->id;
    	$user = User::where('id', '<>', $id_user)->get();
    	$course = Course::where('id', $course_id)->first();
    	return view('page.chat', compact('course', 'user'));
    }
}
