<?php

namespace App;

use  App\PaymentProcessor;

class Store
{
    protected PaymentProcessor $api;

    public function __construct(PaymentProcessor $api)
    {
        $this->api = $api;
    }

    public function processPayment(): void
    {
        $this->api->getClientData();
        $this->api->charge();
    }
}
