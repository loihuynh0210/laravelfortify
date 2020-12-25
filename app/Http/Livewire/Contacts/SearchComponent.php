<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;

class SearchComponent extends Component
{
    public $searchName;
    public $searchEmail;

    // call function form views
    public function searchContact()
    {
        // push function with pagram
        $this->emit('searchContact', $this->searchName, $this->searchEmail);

    }

    // public function updated()
    // {
    //     $this->emit('searchContact', $this->searchTerm);
    // }

    public function render()
    {
        return view('livewire.contacts.search-component');
    }
}
