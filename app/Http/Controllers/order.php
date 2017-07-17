<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class order extends Controller
{
    //
	public function fr( Request $request){
		if( $request->isMethod("POST") ){
			echo "Thank You Well Send You A quotation";
			
		}
		else{
			abort(401);
		}
		
	}
}
