<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $count = 0;
    public $posts;
    public $flag = 0;

    public function increment()
    {
        return $this->count++;
    }

    public function searchForm()
    {
        if ($this->search <> '') {
            $this->posts = Post::where([
                // ['publish_date', '<>', null],
                ['title', 'like', '%' . $this->search . '%'],
                ['content', 'like', '%' . $this->search . '%']
            ])->take(5)->latest()->get();
        } else {
            $this->posts = '';
        }
    }
    public function updatedSearch($value)
    {
        if ($value === '') {
            $this->posts = '';
        }
    }

    public function updatingSearch($value)
    {
        if ($value <> '') {
            $this->posts = Post::where([
                // ['publish_date', '<>', null],
                ['title', 'like', '%' . $value . '%'],
                ['content', 'like', '%' . $value . '%']
            ])->take(5)->latest()->get();
        } else {
            $this->posts = '';
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
