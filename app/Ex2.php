<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ex2 extends Model
{
   	protected $table = "ex2";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }
}
