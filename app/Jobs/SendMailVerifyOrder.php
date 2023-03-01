<?php

namespace App\Jobs;

use App\Mail\MailOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendMailVerifyOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $email;
    private $links;
    private $time_shipping;
    private $shipping_name;
    private $shipping_phone;
    private $shipping_email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shipping,$links,$time_shipping)
    {
        $this->email = $shipping->shipping_email;
        $this->links = $links;
        $this->shipping_name = $shipping->shipping_name;
        $this->shipping_phone = $shipping->shipping_phone;
        $this->time_shipping = $time_shipping;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new \App\Mail\SendMailVerifyOrder(
            $this->links,
            $this->shipping_name,
            $this->shipping_phone,
            $this->time_shipping
        ));
    }
}
