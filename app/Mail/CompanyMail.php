<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $userCompany;
    public $userNew;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userCompany,$userNew)
    {
        $this->userCompany = $userCompany;
        $this->userNew = $userNew;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.companyCredentials')->from('help@fghospitality.com', 'F & G')
            ->subject('Company Credentials')
            ->with([
                'userCompany' => $this->userCompany,
                'userNew' => $this->userNew,
            ]);
    }
}
