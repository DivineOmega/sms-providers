<?php

namespace DivineOmega\SmsProviders\Utils;

use DivineOmega\SmsProviders\Providers\SmsBroadcast;
use DivineOmega\SmsProviders\Providers\Textlocal;
use DivineOmega\SmsProviders\Providers\Twilio;

class Providers
{
    const PROVIDER_CLASS_NAMES = [
        SmsBroadcast::class,
        Textlocal::class,
        Twilio::class,
    ];

    public function getByCallingCode(string $callingCode) : array
    {
        $providers = [];

        foreach(Providers::PROVIDER_CLASS_NAMES as $providerClassName) {
            $provider = new $providerClassName;

            foreach ($provider->getSupportedDestinations() as $country) {
                if (in_array($callingCode, $country->callingCodes)) {
                    $providers[] = $provider;
                    break;
                }
            }
        }

        return $providers;
    }
}