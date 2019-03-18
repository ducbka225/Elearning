<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Course_Comment extends Model
{
    protected $table = "user_course_comment";

    public function user(){
    	return $this->belongsTo('App\User', 'ID_User', 'ID');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'ID_Course', 'ID');
    }
}
