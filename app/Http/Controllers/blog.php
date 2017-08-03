<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post as p;
use App\upload;
//use App\file  as fd;
use Illuminate\Support\Facades\Storage;


class blog extends Controller
{
    //
	public function show(){
		$posd=p::orderBy('created_at','desc')->SimplePaginate(5);
		
		return view('pages.blog',["posts"=>$posd]);
		
		
	}
	public function ty(Request $request){
		//return view('pages.blog');
		if( $request->isMethod("POST")  ){
			if($request->file('img') && $request->file('img')->isValid()    ){
				$path='/public';
				$img_name=$request->file('img')->getClientOriginalName();
				//store file
				
				$sto=$request->file("img")->storeAs($path,$img_name);
				if( $sto ){ 
					$p_det=["title"=>$request->blog_title,"name"=>$request->blog_author,"body"=>$request->blog_content,"image"=>$img_name];
					$po=p::create($p_det);
					if(  $po ){
						$pzz=p::orderBy('created_at','desc')->SimplePaginate(5);
				         return view('blog.admin_posts',["posts"=>$pzz] );
						 }
					
					
										
					}
					else{
						echo "uable to upload";
					}
				   
			   
            }
			else{
				echo"invalid image";
			}
			
        }
			
			
			
		
	}
	public function ad_po(){
		$kj=p::orderBy('created_at','desc')->SimplePaginate(5);
		return view('blog.admin_posts',["posts"=>$kj]);
	}
	
	
}
