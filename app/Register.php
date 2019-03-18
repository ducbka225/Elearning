<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";

    public function user(){
    	return $this->belongsTo('App\User', 'ID_User', 'ID');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'ID_Course', 'ID');
    }
}

