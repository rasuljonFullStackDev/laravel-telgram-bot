<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MyTestEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
        $this->name = $name;
    }

    /**
     * Build the message.
     *https://mailtrap.io/blog/send-email-in-laravel/
     * @return $this
     */
    public function build()
    {
        return $this->view('welcome');
    }
    public function envelope()
    {
        return new Envelope(
            subject: 'My Test Email',
        );
    }
    public function content()
    {
        return new Content(
            view: 'mail.test-email',
            with: ['name' => $this->name],
        );
    }
    public function attachments()
    {
        return ['sadsad'];
    }
}
