<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactBusiness extends Mailable
{
    use Queueable, SerializesModels;

    public $userText;
    public $user;
    public $service;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userText, $user, $service)
    {
        $this->userText = $userText;
        $this->user = $user;
        $this->service = $service;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@jumoyo.com', 'Jumoyo')
                    ->subject('A Jumoyo user wants to contact you.')
                    ->view('emails.contact-business');
    }
}
