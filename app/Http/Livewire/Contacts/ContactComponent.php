<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\ContactLead;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ContactComponent extends Component
{
    use WithPagination, WithFileUploads;

    public $name, $email, $photo, $phone, $message, $preferred, $selected_id;
    public $updateMode = false;
    public $searchName;
    public $searchEmail;

    //protected $paginationTheme = 'bootstrap';

    public $search;
    public $searchEmails;

    protected $queryString = [
        'search',
        'searchEmails',
        'page' => ['except' => 1],
    ];

    private $contact_lead;
    public $perPage = 2;

    protected $listeners = [
        'searchContact' => 'setSearchKeywork',
        'postSearchQueryString' => 'getSearchQueryString'
    ];

    public function mount()
    {
        //$this->fill(request()->only('search', 'page'));
    }

    public function render()
    {
        //$this->addError('email', 'The email field is invalid.');
        // $errors = $this->getErrorBag();
        // $errors->add('email', 'Some message');

        $this->contact_lead = ContactLead::where('name', 'like', '%' . $this->searchName . '%')
                                ->where('email', 'like', '%' . $this->searchEmail . '%')
                                ->paginate($this->perPage);

        return view('livewire.contacts.contact-component', [
            'contact_lead' => $this->contact_lead
        ]);
    }

    // call function form views
    // Search Get
    public function getSearchQueryString()
    {
        // push function with pagram
        $this->searchName = $this->search;
        $this->searchEmail = $this->searchEmails;

        $this->resetPage();
    }

    // call function form views
    // Search Post
    public function setSearchKeywork($searchName, $searchEmail)
    {
        $this->searchName = $searchName;
        $this->searchEmail = $searchEmail;

        $this->resetPage();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->message = null;
        $this->preferred = 0;
    }

    protected $rules = [
        'name' => 'required|min:5',
        //'photo' => 'image|max:1024',
        'email' => 'required|email|min:4',
        'phone' => 'required|min:4',
        'message' => 'nullable',
        'preferred' => 'nullable|min:0|max:1'
    ];

    protected $messages = [
        'email.required' => 'The Email 11 Address cannot be empty.',
        'email.email' => 'The Email 22 Address format is not valid.',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();
        $validatedData['preferred'] = 1;

        ContactLead::create($validatedData);

        //$this->photo->store('photos', 's3');

        // ContactLead::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'phone' => $this->phone,
        //     'message' => $this->message,
        //     'preferred' => 1,
        // ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = ContactLead::findOrFail($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->phone = $record->phone;
        $this->message = $record->message;
        $this->preferred = $record->preferred;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email|min:4',
            'phone' => 'required|min:4',
            'message' => 'nullable',
            'preferred' => 'nullable'
        ]);

        if ($this->selected_id) {
            $record = ContactLead::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message,
                'preferred' => 1,
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }

    }

    public function destroy($id)
    {
        if ($id) {
            $record = ContactLead::where('id', $id);
            $record->delete();
        }
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
}
