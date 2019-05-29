<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit_Ex1 extends Model
{
   	protected $table = "submit_ex1";

    public function ex1(){
    	return $this->belongsTo('App\Ex1', 'id_ex1', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
