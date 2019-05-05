<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mid_Test extends Model
{
    protected $table = "mid_test";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function course(){
    	return $this->belongsTo('App\Course', 'id_course', 'id');
    }

    public function mid_test_result(){
        return $this->hasMany('App\Mid_Test_Result', 'id_midtest', 'id');
    }
}
