<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class PostController extends Controller
{
    public function create(Request $request)
    {
    	$post = $request->all();
    	// dd($request->category_id);
    	$post = Post::create($post);
    	// dd($post);
    	return back()->with('success', 'Added new post');
    }

    public function show()
    {
    	$categories = Category::all();
    	$posts = Post::all();
    	return view('post', compact('categories', 'posts'));
    }
}
