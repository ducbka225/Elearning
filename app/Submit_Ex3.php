<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit_Ex3 extends Model
{
    protected $table = "submit_ex3";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
