<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'id_course', 'id');
    }
}

