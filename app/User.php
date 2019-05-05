<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comment(){
        return $this->hasMany('App\Comment', 'id_user', 'id');
    }

    public function user_lesson(){
        return $this->hasMany('App\User_Lesson', 'id_user', 'id');
    }

    public function user_course_comment(){
        return $this->hasMany('App\User_Course_Comment', 'id_user', 'id');
    }

    public function re_comment(){
        return $this->hasMany('App\Re_Comment', 'id_user', 'id');
    }

    public function register(){
        return $this->hasMany('App\Register', 'id_user', 'id');
    }

    public function submit_ex1(){
        return $this->hasMany('App\Submit_Ex1', 'id_user', 'id');
    }

    public function submit_ex2(){
        return $this->hasMany('App\Submit_Ex2', 'id_user', 'id');
    }

    public function submit_ex3(){
        return $this->hasMany('App\Submit_Ex3', 'id_user', 'id');
    }

    public function submit_ex4(){
        return $this->hasMany('App\Submit_Ex4', 'id_user', 'id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function chat()
    {
        return $this->hasMany(Message::class);
    }

    public function mid_test(){
        return $this->hasMany('App\Mid_Test', 'id_user', 'id');
    }

    public function mid_test_result(){
        return $this->hasMany('App\Mid_Test_Result', 'id_user', 'id');
    }

    public function end_test(){
        return $this->hasMany('App\End_Test', 'id_user', 'id');
    }

    public function end_test_result(){
        return $this->hasMany('App\End_Test_Result', 'id_user', 'id');
    }

}
