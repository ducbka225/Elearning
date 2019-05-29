<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ex1 extends Model
{
    protected $table = "ex1";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function submit_ex1(){
        return $this->hasMany('App\Submit_Ex1', 'id_ex1', 'id');
    }

}
