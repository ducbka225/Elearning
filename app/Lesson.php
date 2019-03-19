<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lesson";

    public function comment(){
    	return $this->hasMany('App\Comment', 'id_lesson', 'id');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'id_course', 'id');
    }
}

