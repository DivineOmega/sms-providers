<?php

namespace DivineOmega\SmsProviders\Providers;

use DivineOmega\SmsProviders\Interfaces\ProviderInterface;

class SmsBroadcast extends BaseProvider implements ProviderInterface
{
    protected $destinationCountries = [
        'Australia',
        'New Zealand',
    ];

}