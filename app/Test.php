<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

	public function user()
	    {
	    	return $this->belongsto('App\User','id_user','id');
	    }
	public function test_result()
	    {
	    	return $this->hasMany('App\Test_Result','id_test','id');
	    }
}
