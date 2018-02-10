<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;//se incluye la entidad

class PageController extends Controller
{
	public function blog()
	{
	$posts = Post::orderBy('id','DESC')->where('status','PUBLICADO')->paginate(3); 
		return view('web.posts',compact('posts'));
	}
}
