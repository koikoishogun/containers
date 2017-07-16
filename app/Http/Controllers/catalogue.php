<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Send_cat;

class catalogue extends Controller
{
    //
	public function show(){
		return view('catalogue.form');
	}
	public function sen( Request $request ){
		if (  $request->isMethod("POST") ){
			 $to=$request->email;
			 ini_set('max_execution_time', 300);
			 $email=Mail::to($to)->send(new Send_cat() );
			 if(   !($email)){
				 echo"success";
			 }
			 else{
				 echo"fail";
			 }
			 
		}
		else{
			abort(401);
		}
	}
}
