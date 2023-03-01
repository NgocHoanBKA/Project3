<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailOrder extends Mailable
{
    use Queueable, SerializesModels;

    private $email;

    /**
     * Create a new message instance.
     *@param $email
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mails.OrderMail')->subject('Xác nhận đơn hàng');
    }
}
