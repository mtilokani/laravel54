<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CompanyRegistration extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    protected $company;

    public $subject = "Wazir - Company Registration";

    /**
     * Create a new message instance.
     *
     *
     * @param mixed $user
     *
     * @return void
     */
    public function __construct($user, $company)
    {
        $this->user = $user;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.company_registration')->with([
            'user' => $this->user,
            'company' => $this->company,
        ]);
    }
}
