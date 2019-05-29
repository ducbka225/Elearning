<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Lesson extends Model
{
    protected $table = "user_lesson";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }
}
