<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        $labels = [
            'mobiele-dansstudio'    => 'mobiele dansstudio',
            'participatief-project' => 'participatief project',
            'algemeen'              => 'algemene vraag',
        ];
        $label = $labels[$this->data['onderwerp']] ?? 'contactaanvraag';

        return new Envelope(
            subject: 'Aanvraag — ' . $label,
            replyTo: [new Address($this->data['email'], $this->data['naam'])],
        );
    }

    public function content(): Content
    {
        return new Content(text: 'emails.contact-request');
    }
}
