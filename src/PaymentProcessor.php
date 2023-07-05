<?php

namespace App;

interface PaymentProcessor
{
    public function getClientData(): void;

    public function charge(): void;
}
