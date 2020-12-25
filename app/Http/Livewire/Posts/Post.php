<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post as BlogPost;

class Post extends Component
{
    public $post;

    public function mount($slug){
        $this->post = BlogPost::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.posts.post')
                ->extends('layouts.admins')
                ->section('content');
    }
}
