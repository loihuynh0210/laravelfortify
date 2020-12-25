<?php

namespace App\Http\Livewire\Contact;

use Livewire\Component;
use App\Actions\Admin\EmailContactLeadAction;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $preferred = 0;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email|min:4',
        'phone' => 'nullable|min:4|required_if:preferred,1',
        'message' => 'nullable',
        'preferred' => 'required|min:0|max:1'
    ];

    protected $messages = [
        'phone.required_if' => 'We need a number to call when the preferred way of contact is by phone.',
    ];

    public function submit()
    {
        $validated = $this->validate();

        (new EmailContactLeadAction)($validated);

        session()->flash('contact-lead-message', 'Your infomation has been saved.');

        redirect()->to('/admin/contact');
    }

    public function render()
    {
        return view('livewire.contact.contact-form')
                ->extends('layouts.admins')
                ->section('content');
    }
}
