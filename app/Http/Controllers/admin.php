<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quotation;
use App\subscriber;
//use App\s_cat;

class admin extends Controller
{
    //
	public function landing(){
		$q=quotation::all();
		//$cat=s_cat::all()->toArray();
		$data=["order"=>$q];//,$cat];
		
		return  view("layouts.admin-master",$data);
	}
	public function orders(){
		$q=quotation::all();
		//$cat=s_cat::all()->toArray();
		$data=["order"=>$q];//,$cat];
		
		return  view("admin.admin-panel",$data);
	}
	public function inter(){
		$su=subscriber::all();
		
		return view("admin.prospective",["subs"=>$su]);
	}
}
