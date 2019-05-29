<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   	protected $table = "course";

   	public function category(){
    	return $this->belongsTo('App\Category', 'id_category', 'id');
    }

    public function teacher(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

	public function lesson(){
    	return $this->hasMany('App\Lesson', 'id_course', 'id');
    }

    public function register(){
    	return $this->hasMany('App\Register', 'id_course', 'id');
    }

    public function user_course_comment(){
    	return $this->hasMany('App\User_course_Comment', 'id_course', 'id');
    }

    public function comment(){
    	return $this->hasManyThrough('App\Comment', 'App\Lesson', 'id_course', 'id_lesson', 'ID');
    }

    public function users(){
    	return $this->hasManyThrough('App\User', 'App\Register', 'id_user', 'id_course', 'id');
    }


    public function mid_test(){
        return $this->hasMany('App\Mid_Test', 'id_course', 'id');
    }

    public function mid_test_result(){
        return $this->hasMany('App\Mid_Test_Result', 'id_course', 'id');
    }

    public function end_test(){
        return $this->hasMany('App\End_Test', 'id_course', 'id');
    }

    public function end_test_result(){
        return $this->hasMany('App\End_Test_Result', 'id_course', 'id');
    }
}
