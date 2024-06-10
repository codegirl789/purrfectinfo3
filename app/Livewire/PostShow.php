<?php

namespace App\Livewire;

use App\Models\post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;
    public $votesCount;
    public $hasVoted;

    public function mount(Post $post, $votesCount)
    {
        $this->post = $post;
        $this->votesCount = $votesCount;
        $this->hasVoted = true;
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
