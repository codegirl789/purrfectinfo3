<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SuperCategory;
use Illuminate\Http\Request;

class SuperCategoryController extends Controller
{
    public function show(string $id)
    {
        $super_category = SuperCategory::where('id', '=', $id)->first();
        $categories = Category::where('super_id', '=', $super_category->id)->get();
        // dd($categories);
        return view('frontend.super_category.show', compact('super_category', 'categories'));
    }
}
