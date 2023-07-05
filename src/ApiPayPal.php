<?php

namespace App;

class ApiPayPal
{
    public function getInfoClient(): void
    {
        var_dump("Obtener informacion del cliente from Paypal");
    }
    public function chargeToClient(): void
    {
        var_dump("cobrarle al cliente desde PayPal");
    }
}
