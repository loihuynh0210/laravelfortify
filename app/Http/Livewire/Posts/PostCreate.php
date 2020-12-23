<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class PostCreate extends Component
{
	public $saveSuccess = false;

	public $post;

    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
    ];

    public function mount(){
        $this->post = new Post;
    }

    public function savePost(){
        $this->post->admin_id = 1;
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.posts.post-create')
        		->extends('layouts.admins')
            	->section('content');
    }
}
