<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
	protected $table= "scores";

    public function user()
    {
    	return $this->belongsto('App\User','id_user','id');
    }
}
