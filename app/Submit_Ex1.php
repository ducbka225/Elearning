<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit_Ex1 extends Model
{
   	protected $table = "submit_ex1";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
