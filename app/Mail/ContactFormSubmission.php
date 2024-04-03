<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable {
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $data) {
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope {
        return new Envelope(subject: 'Neue Anfrage von thaitastic.ch');
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content {
        return new Content(view: 'mails.contact-form-submission');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array {
        return [];
    }
}
