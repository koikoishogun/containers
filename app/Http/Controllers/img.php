<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;

class img extends Controller
{
    //
	public function upload(Request $request){
		if($request->file('img') && $request->file('img')->isValid()){
			//$img_name=$request->file("img")->getClientOriginalName();
			
			
			$sto=file_get_contents($request->file("img") )  ;
			
			if($sto){
				
				$de=["image"=>$sto,"category"=>$request->cat,"description"=>$request->descri];
				$ge=image::create($de);
				
				return $ms="success";
				
			}
			
		}
		
		
	}
	public function show(){
		$im_1=image::where("category","Dry Containers")->simplepaginate(3);
		$im_2=image::where("category","Reefers")->simplepaginate(3);
		$im_3=image::where("category","Office Block")->simplepaginate(3);
		$im_4=image::where("category","Homes")->simplepaginate(3);
		return view("pages.products",["dry"=>$im_1,"re"=>$im_2,"off"=>$im_3,"ho"=>$im_4]);
	}
}
