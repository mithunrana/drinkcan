<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
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
    public $Model;
    public function __construct($Name,$Mobile,$Address,$Model)
    {
        $this->Name = $Name;
        $this->Mobile = $Mobile;
        $this->Address = $Address;
        $this->Model = $Model;
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
        $Model = $this->Model;
        $subject = 'DrinkCan Customer Order';
        return $this->view('Mail.order-notification',compact('Name','Mobile','Address','Model'))->subject($subject);
    }
}
