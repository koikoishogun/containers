<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscriber;

class sub extends Controller
{
    //
	public function save( Request $request ){
		//
		if ( $request->isMethod("POST") ){
			//echo'hit';
			$details=["name"=>$request->name,"email"=>$request->email,"phone_no"=>$request->no];
			$subs=subscriber::create($details);
			if($subs){
				echo'success regi';
				
			}
			else{
				echo'error';
			}
		}
		else{
			abort(401);
		}
		
	}
	public function show(){
		return view('subscriber.form');
	}
}
