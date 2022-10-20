<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExportEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(protected string $filename)
    {
        //
    }

    public function envelope()
    {
        return new Envelope(
            subject: 'Combinações de cervejas que você solicitou.',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.export',
            with: [
                'filename' => $this->filename,
            ]
        );
    }

    public function attachments()
    {
        return [
            Attachment::fromStorage($this->filename),
        ];
    }
}
