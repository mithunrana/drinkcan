<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUserIncomingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;
    public $address;
    public $phone_no;
    public $querymessage;
    public $enquiry_type;
    public $name;
    public function __construct($email,$address,$phone_no,$usermessage,$enquiry_type,$name)
    {
        $this->email = $email;
        $this->address = $address;
        $this->phone_no = $phone_no;
        $this->querymessage = $usermessage;
        $this->enquiry_type = $enquiry_type;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $email = $this->email;
         $address = $this->address;
         $phone_no = $this->phone_no;
         $querymessage = $this->querymessage;
         $enquiry_type = $this->enquiry_type;
         $name = $this->name;
        $subject = 'Website Customer Query';
        return $this->view('Mail.contact-user-incoming-mail',compact('email','address','phone_no','querymessage','enquiry_type','name'))->subject($subject);
    }
}
