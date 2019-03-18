<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lesson";

    public function comment(){
    	return $this->hasMany('App\Comment', 'ID_Lesson', 'ID');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'ID_Course', 'ID');
    }
}

