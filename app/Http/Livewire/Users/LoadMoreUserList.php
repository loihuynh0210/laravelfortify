<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class LoadMoreUserList extends Component
{
    public $perPage = 10;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function loadMore()
    {
        $this->perPage = $this->perPage + 5;
    }

    public function render()
    {
        $users_more = User::latest()->paginate($this->perPage);

        $this->emit('userStore');

        return view('livewire.users.load-more-user-list', [
            'users_more' => $users_more
        ]);
    }
}
