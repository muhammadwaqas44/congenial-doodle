<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $forgettoken;
    public $full_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($forgettoken, $full_name)
    {
        $this->forgettoken = $forgettoken;
        $this->full_name = $full_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.forgetpassword')
            ->from('help@fghospitality.com', 'F & G')
            ->subject('Password Rest Email')
            ->with([
                'forgettoken' => $this->forgettoken,
                'full_name' => $this->full_name,
            ]);
    }
}
