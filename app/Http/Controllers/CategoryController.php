<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.category.index', compact('categories'));
    }

    public function show(string $id)
    {
        $category = Category::where('id', '=', $id)->first();
        $posts = $category->Posts()->paginate(9);

        return view('frontend.category.show', compact('category', 'posts'));
    }
}
