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
		$fe=p::orderBy('created_at','desc')->first();
		
			return view('pages.blog',["posts"=>$posd,"fat"=>$fe]);
			
			}
	public function ty(Request $request){
		//return view('pages.blog');
		if( $request->isMethod("POST")  ){
			if( $request->file('img') && $request->file('img')->isValid() && $request->file("img")->getClientSize() <= 1000000 && $request->file("img")->getMaxFilesize()    ){
				//$path='/public/blog';
				//$img_name=$request->file('img')->getClientOriginalName();
				//store file
				
				//$sto=$request->file("img")->storeAs($path,$img_name);
				//storeblob in mysql_affected_rows
				$sto=file_get_contents($request->file("img")  );
				if( $sto ){ 
					$p_det=["title"=>$request->blog_title,"name"=>$request->blog_author,"body"=>$request->blog_content,"image"=>$sto];
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
				$m="invalid image size max image size is  1mb ".$request->file("img")->getClientSize();
				return $m;
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
						//$path='/public/blog';
				        //$img_name=$request->file('img')->getClientOriginalName();
						$sto=file_get_contents($request->file('img'));
						if($sto){
							$pst->title=$request->blog_title;
						$pst->name=$request->blog_author;
						$pst->body=$request->blog_content;
						$pst->image=$sto;
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
			return redirect("/post-blog");
		}
		
	}
	public function view_post($id){
		$pst=p::find($id);
		
	    return view("blog.user_view",["user"=>$pst ]  );
	
		
	}
	
	
	
}
