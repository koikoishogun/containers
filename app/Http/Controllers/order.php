<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class order extends Controller
{
    //
	public function fr( Request $request){
		if( $request->isMethod("POST") ){
			echo "hit";
			
		}
		else{
			abort(401);
		}
		
	}
}
