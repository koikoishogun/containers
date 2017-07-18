<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quotation;
//use App\s_cat;

class admin extends Controller
{
    //
	public function landing(){
		$q=quotation::all();
		//$cat=s_cat::all()->toArray();
		$data=["q"=>$q];//,$cat];
		
		return  view("admin.admin-panel",$data);
	}
}
