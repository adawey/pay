<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerifyPay extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $code;
    private $amount;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $code, $amount)
    {
        $this->code = $code;
        $this->name = $name;
        $this->amount = $amount;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Verify Pay',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {

        // return $this->view('mail.VerifyPay', compact('code', 'name', 'amount'));
        return new Content(
            view: 'mail.VerifyPay',
            with: [
                'code' => $this->code,
                'name' => $this->name,
                'amount' => $this->amount,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
