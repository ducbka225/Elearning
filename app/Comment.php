<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";

    public function user(){
    	return $this->belongsTo('App\User', 'ID_User', 'ID');
    }

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'ID_Lesson', 'ID');
    }

    public function re_comment(){
    	return $this->hasMany('App\Re_Comment', 'ID_Comment', 'ID');
    }
}
