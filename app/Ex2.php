<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ex2 extends Model
{
   	protected $table = "ex2";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function submit_ex2(){
        return $this->hasMany('App\Submit_Ex2', 'id_ex2', 'id');
    }

}
