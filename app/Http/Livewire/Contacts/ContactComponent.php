<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;
use App\Models\ContactLead;
use Livewire\WithPagination;

class ContactComponent extends Component
{
    use WithPagination;

    public $name, $email, $phone, $message, $preferred, $selected_id;
    public $updateMode = false;
    public $searchName;
    public $searchEmail;

    private $contact_lead;
    public $perPage = 2;

    protected $listeners = [
        'searchContact' => 'setSearchTerm',
    ];

    public function render()
    {
        $this->contact_lead = ContactLead::where('name', 'like', '%' . $this->searchName . '%')
                                ->where('email', 'like', '%' . $this->searchEmail . '%')
                                ->paginate($this->perPage);

        return view('livewire.contacts.contact-component', [
            'contact_lead' => $this->contact_lead
        ]);
    }

    public function setSearchTerm($searchName, $searchEmail)
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

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|min:4',
            'phone' => 'required|min:4',
            'message' => 'nullable',
            'preferred' => 'nullable|min:0|max:1'
        ]);

        ContactLead::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'preferred' => 1,
        ]);

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
