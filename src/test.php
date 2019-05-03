<?php

use DivineOmega\SmsProviders\Providers\SmsBroadcast;

require_once __DIR__.'/../vendor/autoload.php';

$supportedDestinations = (new SmsBroadcast())->getSupportedDestinations();

foreach ($supportedDestinations as $supportedDestination) {
    echo $supportedDestination->name.PHP_EOL;
}