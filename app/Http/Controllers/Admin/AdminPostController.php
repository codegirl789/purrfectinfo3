<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\SuperCategory;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $sub_categories = SubCategory::latest()->get();
        $super_categories = SuperCategory::latest()->get();
        $statuses = Status::latest()->get();

        return view('admin.post.create', compact('categories', 'sub_categories', 'super_categories', 'statuses'));
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
            $file->move('Posts/', $filename);
            $image = 'Posts/' . $filename;
            Post::create(array_merge($request->except('image'), ['image' => $image]));

            toastr()->success('Post Added Successfully!');
            return redirect()->route('admin.post.index');
        }

        Post::create($request->all());

        toastr()->success('Post Added Successfully!');
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        $categories = Category::latest()->get();
        $sub_categories = SubCategory::latest()->get();
        $super_categories = SuperCategory::latest()->get();
        $statuses = Status::latest()->get();

        return view('admin.post.edit', compact('post', 'categories', 'super_categories', 'sub_categories', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $originalfilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extenstion = $file->getClientOriginalExtension();
            $filename = $originalfilename . '_' .  time() . '.' . $extenstion;
            $file->move('Categories/', $filename);
            $image = 'Categories/' . $filename;
            $post->image = $image;
            $post->save();
        }

        $post->update($request->except('image'));


        toastr()->success('Post Updated Successfully!');
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        toastr()->success('post deleted successfully!');
        return redirect()->route('admin.post.index');
    }
}
