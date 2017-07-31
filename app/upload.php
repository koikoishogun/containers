<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    //
	protected $fillable=["name","file_type" ];
	public function post() {
        return $this->hasMany('App\post');
    }
	public function file() {
        return $this->belongsTo('App\file');
    }
	
}
