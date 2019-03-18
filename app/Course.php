<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   	protected $table = "course";

   	public function category(){
    	return $this->belongsTo('App\Category', 'ID_Category', 'ID');
    }

	public function lesson(){
    	return $this->hasMany('App\Lesson', 'ID_Course', 'ID');
    }

    public function register(){
    	return $this->hasMany('App\Register', 'ID_Course', 'ID');
    }

    public function user_course_comment(){
    	return $this->hasMany('App\User_course_Comment', 'ID_Course', 'ID');
    }

    public function comment(){
    	return $this->hasManyThrough('App\Comment', 'App\Lesson', 'ID_Course', 'ID_Lesson', 'ID');
    }

    public function users(){
    	return $this->hasManyThrough('App\User', 'App\Register', 'ID_User', 'ID_Course', 'ID');
    }
}
