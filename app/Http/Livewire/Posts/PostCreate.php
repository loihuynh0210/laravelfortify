<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class PostCreate extends Component
{
    public $saveSuccess = false;

    public $post;

    public $name;

    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
    ];

    public $listeners = [
        'savePost' => 'savePosts',
        'sayhello' => 'sayHellos'
    ];

    public function mount(){
        $this->post = new Post;
    }

    public function sayHellos($data)
    {
        $this->name = $data['name'];
        $this->emit('loadCard', ['type' => 'success', 'title' => 'Saved', 'message' => 'Saved ' . $this->name]);
    }

    public function savePosts() {
        $this->post->admin_id = 1;
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->saveSuccess = true;

        // // share data to view
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'title' => 'Saved', 'message' => 'Saved 113']);
        $this->emit('loadCard', ['type' => 'success', 'title' => 'Saved', 'message' => 'Saved 113']);
    }

    public function render()
    {
        return view('livewire.posts.post-create')
                ->extends('layouts.admins')
                ->section('content');
    }
}
