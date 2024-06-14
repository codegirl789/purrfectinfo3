<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexComment extends Component
{
    public Post $post;
    public $comments;

    protected $listeners = ['commentAdded'];

    public function mount()
    {
        $this->post = Post::where('id', $this->post->id)->first();
    }

    public function commentAdded()
    {
        $this->post = Post::where('id', $this->post->id)->first();
    }

    public function render()
    {
        return view('livewire.index-comment');
    }
}
