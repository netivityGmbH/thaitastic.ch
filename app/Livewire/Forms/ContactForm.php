<?php

namespace App\Livewire\Forms;

use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form {
    #[Validate(['required', 'min:2'])]
    public $name = '';

    #[Validate(['required', 'email:rfc'])]
    public $email = '';

    #[Validate(['nullable'])]
    public $mobile = '';

    #[Validate(['nullable'])]
    public $landline = '';

    #[Validate(['required', 'min:2'])]
    public $message = '';

    public function email() {
        $this->validate();

        Mail::to('info@thaitastic.ch')->send(new ContactFormSubmission($this->all()));
    }
}
