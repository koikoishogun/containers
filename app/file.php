<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    //
	protected $fillable=["code","file_type" ];
	public function upload() {
        return $this->hasMany('App\upload');
    }
}
