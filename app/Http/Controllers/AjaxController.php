<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;

class AjaxController extends Controller
{
    public function postRegister(Request $req){
    	// $register_end = Register::orderby('id')->first();
    	$register = new Register;
    	$register->register_number = rand();
    	$register->totalprice = $req->price;
    	$register->payment = 'banking';
    	$register->id_user = Auth::User()->id;
    	$register->id_course = $req->course_id;
    	$register->save();

    	$user = User::find(Auth::User()->id);
    	$user->balance = $user->balance - $req->balance;
    	$user->save();
        $result = true;
    	return response()->json($result);
    }
}
