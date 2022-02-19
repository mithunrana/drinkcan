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
    public $ShipingAddress;
    public $City;
    Public $Email;
    public $TotalAmount;
    public $Subtotal;
    public $Vat;
    public $ShipingCharge;
    public function __construct($Name,$Mobile,$ShipingAddress,$City,$Email,$TotalAmount,$Subtotal,$Vat,$ShipingCharge)
    {
        $this->Name = $Name;
        $this->Mobile = $Mobile;
        $this->ShipingAddress = $ShipingAddress;
        $this->City = $City;
        $this->Email = $Email;
        $this->TotalAmount = $TotalAmount;
        $this->Subtotal = $Subtotal;
        $this->Vat = $Vat;
        $this->ShipingCharge = $ShipingCharge;
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
        $ShipingAddress = $this->ShipingAddress;
        $City = $this->City;
        $Email = $this->Email;
        $TotalAmount = $this->TotalAmount;
        $SubTotal = $this->Subtotal;
        $Vat = $this->Vat;
        $ShipingCharge = $this->ShipingCharge;
        
        $subject = 'DrinkCan Water Purifier Order';
        
        return $this->view('Mail.order-notification',compact('Name','Mobile','ShipingAddress','City','Email','TotalAmount','SubTotal','Vat','ShipingCharge'))->subject($subject);
    }
}
