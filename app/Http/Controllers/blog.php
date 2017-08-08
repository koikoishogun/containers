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
			if( $request->file('img') && $request->file('img')->isValid()    ){
				$path='/public/blog';
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
						echo "unable to upload";
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
	public function update(  Request $request ){
		
		if(  $request->isMethod( "POST")  ){
					//fetch specific post
				$pst=p::find($request->id);
				if($pst){
						$pst->title=$request->title;
						$pst->name=$request->name;
						$pst->body=$request->body;
						$pst->image=$request->image;
						 $ps_p=$pst->save();
						if($ps_p ){
							return $msg="success";
							
						}
					
				}
				
			
		}
		
		
		
	}
	public function update_form( $id ){
		$pst=p::find($id);
		if( $pst  ){
			$pss=["title"=>$request->title,"name"=>$request->name,"body"=>$request->body,"image"=>$request->image];
			return view("admin.post-blog", $pss );
			
		}
		
		
	}
	public function del_post($id){
		
	}
	
	
}
