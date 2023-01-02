<?php

namespace App\Http\Livewire\Public\Contact;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $success;
    public $message;
    public $subject;
    public $company;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'nullable',
        'company' => 'nullable',
        'subject' => 'required',
        'message' => 'required'
    ];

    public function sendmail(\Request $request)
    {
        $this->validate();

        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => $this->company,
            'subject' => $this->subject,
            'message' => $this->message
        );

        Mail::to('rickvisser99@gmail.com')->send(new SendMail($data));
        $this->clearFields();
        $this->dispatchBrowserEvent('notify', 'Message successfully send!');
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->company = '';
        $this->message = '';
        $this->phone = '';
    }


    public function render()
    {
        return view('livewire.public.contact.contact-form');
    }
}
