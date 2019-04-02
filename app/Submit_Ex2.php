<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit_Ex2 extends Model
{
	protected $table = "submit_ex2";
    public function ex2(){
    	return $this->belongsTo('App\Ex2', 'id_ex2', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
