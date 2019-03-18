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
        'Name', 'Email', 'Password','Role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = "users";

    public function comment(){
        return $this->hasMany('App\Comment', 'ID_User', 'ID');
    }

    public function user_course_comment(){
        return $this->hasMany('App\User_Course_Comment', 'ID_User', 'ID');
    }

    public function re_comment(){
        return $this->hasMany('App\Re_Comment', 'ID_User', 'ID');
    }

    public function register(){
        return $this->hasMany('App\Register', 'ID_User', 'ID');
    }

}
