<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HomeDemoIncomingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Name;
    public $Mobile;
    public $Address;
    public $Email;
    public function __construct($Name,$Mobile,$Address,$Email)
    {
        $this->Name = $Name;
        $this->Mobile = $Mobile;
        $this->Address = $Address;
        $this->Email = $Email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $Name = $this->Name;
        $Mobile = $this->Mobile;
        $Address = $this->Address;
        $Email = $this->Email;
        $subject = 'Free Home Demo Order';
        return $this->view('Mail.home-demo-incoming',compact('Name','Mobile','Address','Email'))->subject($subject);
    }
}
