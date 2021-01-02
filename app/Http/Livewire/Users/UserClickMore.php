<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;

class UserClickMore extends Component
{
    public $amount = 2;

    public function load()
    {
        $this->amount += 2;
    }

    public function render()
    {
        return view('livewire.users.user-click-more', [
            'users' => User::take($this->amount)->get(),
        ]);
    }
}
