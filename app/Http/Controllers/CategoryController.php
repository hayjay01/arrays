<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
    	$category = $request->all();
    	$added = Category::create($category);
    	// dd($category);
        return response()->json(['added' => $added]);
    	// return back()->with('success', 'Added new category');
    }

    public function show()
    {
    	$categories = Category::all();
    	return view('index', compact('categories'));
    }

    public function destroy($id)
    {
    	$delete_category = Category::findOrFail($id);
    	$delete_category->destroy($delete_category->id);
    	return back()->with('delete', 'Category deleted successfully');
    }
}
