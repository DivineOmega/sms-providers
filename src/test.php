<?php

use DivineOmega\SmsProviders\Providers\Twilio;

require_once __DIR__.'/../vendor/autoload.php';

$supportedDestinations = (new Twilio())->getSupportedDestinations();

foreach ($supportedDestinations as $supportedDestination) {
    echo $supportedDestination->name.PHP_EOL;
}