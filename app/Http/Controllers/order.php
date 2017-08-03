<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quotation;

class order extends Controller
{
    //
	public function quote( Request $request){
		if( $request->isMethod("POST") ){
			$details=["type"=>$request->type,"size"=>$request->size,"name"=>$request->name,"phone_number"=>$request->phone_number,"email"=>$request->email,"number"=>$request->no];
			$quo=quotation::create($details);
			if($quo){
				$message="Thank A quotation Has Been Sent To Your Email";
				return $message;
			}
			else{
				abort(401);
			}
			//echo "Thank You Well Send You A quotation";
			
		}
		else{
			abort(401);
		}
		
	}
}
