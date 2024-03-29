<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessageHeadOffice extends Mailable
{
    use Queueable, SerializesModels;

    protected $fields;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fields)
    {
        $this->fields = $fields;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('POJ - Pesan Pengunjung')
            ->markdown('emails.message.head-office')->with([
                'fields' => $this->fields,
            ]);
    }
}
