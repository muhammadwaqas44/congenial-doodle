<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCredentialsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userNew;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userNew)
    {
        $this->userNew = $userNew;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.userCredentials')->from('help@fghospitality.com', 'F & G')
            ->subject('User Credentials')
            ->with([
                'userNew' => $this->userNew,
            ]);
    }
}
