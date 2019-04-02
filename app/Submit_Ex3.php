<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit_Ex3 extends Model
{
    protected $table = "submit_ex3";

    public function ex3(){
    	return $this->belongsTo('App\Ex3', 'id_ex3', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
