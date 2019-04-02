<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ex3 extends Model
{
	protected $table = "ex3";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function submit_ex3(){
        return $this->hasMany('App\Submit_Ex3', 'id_ex3', 'id');
    }
}
