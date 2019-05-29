<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit_Ex4 extends Model
{
    protected $table = "submit_ex4";

    public function ex4(){
    	return $this->belongsTo('App\Ex4', 'id_ex4', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
