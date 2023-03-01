<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailVerifyOrder extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $links;
    private $shipping_name;
    private $shipping_phone;
    private $time_shipping;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($links,$shipping_name,$shipping_phone,$time_shipping)
    {
        $this->links = $links;
        $this->shipping_name = $shipping_name;
        $this->shipping_phone = $shipping_phone;
        $this->time_shipping = $time_shipping;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mails.SendMailVerifyOrder', ['links' => $this->links, 'shipping_name' => $this->shipping_name, 'shipping_phone' => $this->shipping_phone, 'time_shipping' => $this->time_shipping])->subject('Đặt bánh thành công !');
    }
}
