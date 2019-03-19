<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Re_comment extends Model
{
    protected $table = "re_comment";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function comment(){
    	return $this->belongsTo('App\comment', 'id_comment', 'id');
    }
}

