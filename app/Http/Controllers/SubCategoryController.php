<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $sub_categories = SubCategory::all();
        return view('frontend.sub_category.index', compact('sub_categories'));
    }
}
