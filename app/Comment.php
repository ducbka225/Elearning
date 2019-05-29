<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function re_comment(){
    	return $this->hasMany('App\Re_Comment', 'id_comment', 'id');
    }
}
