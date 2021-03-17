<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserPagination extends Component
{
    use WithPagination;

    public $isVisible = false;

    public function setVisibleTrue()
    {
        $this->isVisible = false;
    }

    public function render()
    {
        return view('livewire.users.user-pagination', [
            'users' => User::paginate(3),
        ]);
    }
}
