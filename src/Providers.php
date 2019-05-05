<?php

namespace DivineOmega\SmsProviders;

use DivineOmega\Countries\Country;
use DivineOmega\SmsProviders\Interfaces\ProviderInterface;
use DivineOmega\SmsProviders\Providers\SmsBroadcast;

class Providers
{
    const PROVIDERS_CLASS_NAMES = [
        SmsBroadcast::class,
    ];

    public function all()
    {
        $providers = [];

        foreach (self::PROVIDERS_CLASS_NAMES as $className) {
            $providers[] = new $className;
        }

        return $providers;
    }

    public function getBySupportedDestinationCountry(Country $country)
    {
        $providers = [];

        /** @var ProviderInterface $provider */
        foreach ($this->all() as $provider) {
            /** @var Country $supportedDestinationCountry */
            foreach ($provider->getSupportedDestinationCountries() as $supportedDestinationCountry) {
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