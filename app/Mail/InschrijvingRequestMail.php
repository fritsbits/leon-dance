<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InschrijvingRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Inschrijving — '.$this->data['project'].': '.$this->data['editie'],
            replyTo: [new Address($this->data['email'], $this->data['naam'])],
        );
    }

    public function content(): Content
    {
        return new Content(text: 'emails.inschrijving-request');
    }
}
