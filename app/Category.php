<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function course(){
    	return $this->hasMany('App\Course', 'id_category', 'id');
    }
}
