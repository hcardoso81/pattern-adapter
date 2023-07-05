<?php

namespace App;

use App\ApiBank;
use App\PaymentProcessor;

class AdapterBankApi implements PaymentProcessor
{
    protected ApiBank $apiBank;

    public function __construct(ApiBank $apiBank)
    {
        $this->apiBank = $apiBank;
    }

    public function getClientData(): void
    {
        $this->apiBank->getClientInfo();
    }
    public function charge(): void
    {
        $this->apiBank->chargeClient();
    }
}
