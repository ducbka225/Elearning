<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use App\Category;
use Hash;

class UserController extends Controller
{
    function __construct(){
        $category = Category::all();
        view()->share('category',$category);
    }

    public function getLogin(){
    	return view('page.login');
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
        
        $user = array('Email'=>$request->email, 'Password'=>$request->password, 'Role'=>$request->role);
        if(Auth::attemp($user)){
            return redirect('index');
        }

        else{
            return redirect('login')->with('message','Đăng Nhập thất bại');
        }

        
    }
}
