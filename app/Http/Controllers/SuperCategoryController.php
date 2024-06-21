<?php

namespace App\Http\Controllers;

use App\Models\SuperCategory;
use Illuminate\Http\Request;

class SuperCategoryController extends Controller
{
    public function show(string $id)
    {
        $super_category = SuperCategory::where('id', '=', $id)->first();
        $posts = $super_category->Posts()->paginate(12);
        return view('frontend.super_category.show', compact('super_category', 'posts'));
    }
}
