<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\ContactLead;

class SearchComponent extends Component
{
    public $searchName;
    public $searchEmail;

    public $contact;

    protected $listeners = [
        'postSearch' => 'getEventListeners',
        'postItems' => 'getListenersItems'
    ];

    public function mount(){
        $this->contact = ContactLead::where('id', 1)->first();
    }

    public function getListenersItems(ContactLead $contact)
    {
        dd($contact->toArray());
    }

    // call function form views
    public function getEventListeners()
    {
        // push function with pagram
        $this->emit('searchContact', $this->searchName, $this->searchEmail);

    }

    // public function updated()
    // {
    //     $this->emit('searchContact', $this->searchName, $this->searchEmail);
    // }

    public function render()
    {
        return view('livewire.contacts.search-component');
    }
}
