<?php

namespace App\Http\Controllers;

use App\Models\SuperCategory;
use Illuminate\Http\Request;

class SuperCategoryController extends Controller
{
    public function index()
    {
        $super_categories = SuperCategory::all();
        return view('frontend.super_category.index', compact('super_categories'));
    }
}
