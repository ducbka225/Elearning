<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class End_Test_Result extends Model
{
    protected $table = "end_test_result";
    protected $fillable = ['keychoose', 'id_user', 'id_endtest'];
    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function mid_test(){
    	return $this->belongsTo('App\End_Test', 'id_endtest', 'id');
    }
}
