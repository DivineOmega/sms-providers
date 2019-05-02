<?php

use DivineOmega\SmsProviders\Providers\SmsBroadcast;

require_once __DIR__.'/../vendor/autoload.php';

$supportedDestinationCountries = (new SmsBroadcast())->getSupportedDestinationCountries();

var_dump($supportedDestinationCountries);