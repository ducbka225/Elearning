<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Re_comment extends Model
{
    protected $table = "re_comment";

    public function user(){
    	return $this->belongsTo('App\User', 'ID_User', 'ID');
    }

    public function comment(){
    	return $this->belongsTo('App\comment', 'ID_Comment', 'ID');
    }
}

