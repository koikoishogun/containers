<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
	protected $fillable=["title","name","body","image","doc"  ];
	
	public function upload() {
        return $this->hasMany('App\upload');
    }
	
}
