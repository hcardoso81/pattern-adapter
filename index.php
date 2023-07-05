<?php
require 'vendor/autoload.php';

use App\AdapterBankApi;
use App\AdapterPayPalApi;
use App\ApiBank;
use App\ApiPayPal;
use App\Store;

$adapterBank = new AdapterBankApi(new ApiBank());
$adapterPayPal = new AdapterPayPalApi(new ApiPayPal());

$store = new Store($adapterBank);
$store->processPayment();

$store2 = new Store($adapterPayPal);
$store2->processPayment();
