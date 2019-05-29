<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class End_Test extends Model
{
    
    protected $table = "end_test";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'id_course', 'id');
    }

    public function end_test_result(){
        return $this->hasMany('App\End_Test_Result', 'id_endtest', 'id');
    }
}
