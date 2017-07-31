<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post as p;
use App\upload;
use App\file;


class blog extends Controller
{
    //
	public function show(){
		$posd=p::orderBy('created_at','desc')->SimplePaginate(10);
		
		return view('pages.blog',["posts"=>$posd]);
		
		
	}
	public function ad (Request $request){
		//return view('pages.blog');
		/*if( $request->isMethod("POST")  ){
			if($request->file('img') && $request->file('img')->isValid() &&    $request->file('doc')  &&   $request->file('doc')->isValid()    ){
            $path='/files/';
            $doc_name=$request->file('doc')->getClientOriginalName();
			$img_name=$request->file('img')->getClientOriginalName();
            if($request->file('doc')->move($path,$name)  &&   $request->file('img')->move($path,$name)  ){ 
				$doc_det=["name"=>$request->$doc_name,"file_type"=>2];
			    $up_doc=upload::create($doc_det);
				$img_det=["name"=>$request->$img_name,"file_type"=>2];
				 $up_img=upload::create($img_det);
				 
				if(  $up_img && $up_doc){
					$p_det=["title"=>$request->blog_title,"name"=>$request->blog_author,"body"=>$request->blog_content,"image"=>$up_img->id,"doc"=>$up_doc->id];
			$po=p::create($p_det);
			if(  $po ){
				$msg="Your Post has been  successfully Added";
				return $msg;
				
			}
			
		}
		else{
			abort(401);
		}
					
				}
                
            }
        }*/
		echo"hit";
			
			
			
		
	}
	public function show_form(){
		
		return view("blog.form");
	}
}
