<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Heart extends Component
{
    public $post;
    public $liketext;
    public $count = 0;
    public $loader = false;

    protected $listeners = ['countChanged', 'like'];

    public function mount($post)
    {
        $this->liketext = 'Like';
        $this->count = $this->post->likedBy->count();
        $this->post = Post::findOrFail($post->id);
    }

    public function countChanged()
    {
        $this->count = $this->post->likedBy->count();
    }

    public function like($post)
    {
        // dd('jkjl');
        $this->loader = true;
        $post = Post::findOrFail($post['id']);
        $user = User::findOrFail(Auth::user()->id);

        $user->postlikes()->toggle($post->id);
        $this->count = $this->post->likedBy->count();

        $this->dispatch('countChanged');
    }

    public function render()
    {
        return view('livewire.heart');
    }
}
