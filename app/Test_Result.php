<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_Result extends Model
{
    protected $table = "test__results";

    protected $fillable =[ 
    'id_user',
    'id_test',
    'answer',
    'times',
    ];

    public function test()
    {
     	return $this->belongsto('App\Test','id_test','id');
    }  
    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
}
