<?php

namespace DivineOmega\SmsProviders;

use DivineOmega\Countries\Country;
use DivineOmega\SmsProviders\Interfaces\ProviderInterface;
use DivineOmega\SmsProviders\Providers\AmazonSNS;
use DivineOmega\SmsProviders\Providers\SmsBroadcast;
use DivineOmega\SmsProviders\Providers\Textlocal;
use DivineOmega\SmsProviders\Providers\Twilio;

class Providers
{
    const PROVIDERS_CLASS_NAMES = [
        AmazonSNS::class,
        SmsBroadcast::class,
        Textlocal::class,
        Twilio::class,
    ];

    public function all()
    {
        $providers = [];

        foreach (self::PROVIDERS_CLASS_NAMES as $className) {
            $providers[] = new $className;
        }

        return $providers;
    }

    public function getByDestinationCountry(Country $country)
    {
        $providers = [];

        /** @var ProviderInterface $provider */
        foreach ($this->all() as $provider) {
            /** @var Country $supportedDestinationCountry */
            foreach ($provider->getSupportedDestinations() as $supportedDestinationCountry) {
                if ($supportedDestinationCountry->isoCodeAlpha3 === $country->isoCodeAlpha3) {
                    $providers[] = $provider;
                    break;
                }
            }
        }

        return $providers;
    }

    public function getByDestinationCallingCode(string $callingCode) : array
    {
        $providers = [];

        /** @var ProviderInterface $provider */
        foreach ($this->all() as $provider) {
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