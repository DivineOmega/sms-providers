<?php

use DivineOmega\SmsProviders\Utils\Providers;

require_once __DIR__.'/../vendor/autoload.php';

$providers = (new Providers())->getByCallingCode('44');

foreach ($providers as $provider) {
    echo get_class($provider);
    echo PHP_EOL;
}
