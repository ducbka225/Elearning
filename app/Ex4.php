<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ex4 extends Model
{
    protected $table = "ex4";

    public function lesson(){
    	return $this->belongsTo('App\Lesson', 'id_lesson', 'id');
    }

    public function submit_ex4(){
        return $this->hasMany('App\Submit_Ex4', 'id_ex4', 'id');
    }
}
