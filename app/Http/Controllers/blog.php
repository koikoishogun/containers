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
					if(  $request->file('img') && $request->file('img')->isValid()  ){
						$path='/public/blog';
				        $img_name=$request->file('img')->getClientOriginalName();
						$sto=$request->file("img")->storeAs($path,$img_name);
						if($sto){
							$pst->title=$request->blog_title;
						$pst->name=$request->blog_author;
						$pst->body=$request->blog_content;
						$pst->image=$img_name;
						 $ps_p=$pst->save();
						if($ps_p ){
							//return $msg="success";
							return redirect("/post-blog");
							
						}
						
							
						}
					}
					
				}
				
			
		}
		
		
		
	}
	public function update_form( $id ){
		$pst=p::find($id);
		if( $pst  ){
			$pss=[ "id"=>$pst->id, "title"=>$pst->title,"name"=>$pst->name,"body"=>$pst->body,"image"=>$pst->image];
			return view("blog.form", $pss );
			
		}
		
		
	}
	public function del_post($id){
		$pst=p::destroy($id);
		if($pst){
			return redirect("/post-blog");;
		}
		
	}
	
	
}
