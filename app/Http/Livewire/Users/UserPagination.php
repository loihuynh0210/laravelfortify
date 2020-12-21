<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserPagination extends Component
{
	use WithPagination;

	public $perPage = 15;

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


        return view('livewire.users.user-pagination', [
        	'users' => User::paginate(10),
        	'users_more' => $users_more
        ]);
    }
}
