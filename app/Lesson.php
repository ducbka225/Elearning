<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lesson";

    public function comment(){
    	return $this->hasMany('App\Comment', 'id_lesson', 'id');
    }

    public function user_lesson(){
        return $this->hasMany('App\User_Lesson', 'id_lesson', 'id');
    }

    public function ex1(){
    	return $this->hasMany('App\Ex1', 'id_lesson', 'id');
    }
    public function ex2(){
    	return $this->hasMany('App\Ex2', 'id_lesson', 'id');
    }
    public function ex3(){
    	return $this->hasMany('App\Ex3', 'id_lesson', 'id');
    }
    public function ex4(){
    	return $this->hasMany('App\Ex4', 'id_lesson', 'id');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'id_course', 'id');
    }
}

