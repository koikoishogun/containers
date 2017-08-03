<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\msg;

class msg extends Controller
{
    //
	public function send(Request $request){
		if( $request->isMethod("POST")){
			$det=["name"=>$request->name,"email"=>$request->email,"body"=>$request->body];
			$ms=msg::create($det);
			if($ms){
				return $we="Message Sent Successfully";
				
			}
			
		}
		
	}
	public function show(){
		$m=msg::all();
		return view("msg.admin_show",["msg"=>$m]);
	}
}
