<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateComment extends Component
{
    public Post $post;
    public $message;

    protected $rules = [
        'message' => 'required|min:6',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();
        Comment::create([
            'message' => $this->message,
            'post_id' => $this->post->id,
            'user_id' => Auth::user()->id
        ]);
        $this->message = '';

        toastr()->success('Comment Added Successfully!');

        $this->dispatch('commentAdded');
        // session()->flash('message', 'Comment Added Successfully');
    }

    public function render()
    {
        return view('livewire.create-comment');
    }
}
