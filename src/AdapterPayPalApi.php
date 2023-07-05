<?php

namespace App;

use App\ApiPayPal;
use App\PaymentProcessor;

class AdapterPayPalApi implements PaymentProcessor
{
    protected ApiPayPal $apiPayPal;
    public function __construct(ApiPayPal $apiPayPal)
    {
        $this->apiPayPal = $apiPayPal;
    }
    public function getClientData(): void
    {
        $this->apiPayPal->getInfoClient();
    }
    public function charge(): void
    {
        $this->apiPayPal->chargeToClient();
    }
}
