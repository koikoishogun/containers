<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;

class img extends Controller
{
    //
	public function upload(Request $request){
		if($request->file('img') && $request->file('img')->isValid()){
			$img_name=$request->file(img)->getClientOriginalName();
			$de=["name"=>$img_name,"category"=>$request->cat,"description"=>$request->desc];
			
			$sto=$request->file("img")->storeAs("/public",$img_name);
			$ge=image::create($de);
			if($sto  && $ge ){
				
				return $ms="success";
				
			}
			
		}
		
		
	}
	public function show(){
		$im_1=image::where("category","Dry Containers")->get();
		$im_2=image::where("category","Reefers")->get();
		$im_3=image::where("category","Office Block")->get();
		$im_4=image::where("category","Homes")->get();
		return view("pages.products",["dry"=>$im_1,"re"=>$im_2,"off"=>$im_3,"ho"=>$im_4]);
	}
}
