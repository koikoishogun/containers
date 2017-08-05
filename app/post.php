<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
	protected $fillable=["title","name","body","image" ];
	
	public function upload() {
        return $this->hasOne('App\upload');
    }
	
}
