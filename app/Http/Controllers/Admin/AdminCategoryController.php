<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Status;
use App\Models\SuperCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $super_categories = SuperCategory::latest()->get();
        $colors = Color::latest()->get();
        return view('admin.category.create', compact('super_categories', 'colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $originalfilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extenstion = $file->getClientOriginalExtension();
            $filename = $originalfilename . '_' .  time() . '.' . $extenstion;
            $file->move('Categories/', $filename);
            $image = 'Categories/' . $filename;
            Category::create(array_merge($request->except('image'), ['image' => $image]));

            toastr()->success('Category Added Successfully!');
            return redirect()->route('admin.category.index');
        }

        Category::create($request->all());

        toastr()->success('Category Added Successfully!');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $colors = Color::latest()->get();
        $super_categories = SuperCategory::latest()->get();

        return view('admin.category.edit', compact('category', 'super_categories', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $originalfilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extenstion = $file->getClientOriginalExtension();
            $filename = $originalfilename . '_' .  time() . '.' . $extenstion;
            $file->move('Categories/', $filename);
            $image = 'Categories/' . $filename;
            $category->image = $image;
            $category->save();
        }

        $category->update($request->except('image'));

        toastr()->success('Category Updated Successfully!');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        toastr()->success('category deleted successfully!');
        return redirect()->route('admin.category.index');
    }
}
