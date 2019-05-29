<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mid_Test_Result extends Model
{
    protected $table = "mid_test_result";
    protected $fillable = ['keychoose', 'id_user', 'id_midtest']; 
    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function mid_test(){
    	return $this->belongsTo('App\Mid_Test', 'id_midtest', 'id');
    }
}
