<?php


namespace DivineOmega\SmsProviders\Providers;

use DivineOmega\Countries\Countries;
use DivineOmega\SmsProviders\Interfaces\ProviderInterface;

abstract class BaseProvider implements ProviderInterface
{
    protected $destinationCountries = [];

    public function getSupportedDestinations() : array
    {
        $supportedDestinations = [];
        $countries = new Countries();

        foreach ($this->destinationCountries as $country) {
            $supportedDestinations[] = $countries->getByName($country);
        }

        return $supportedDestinations;
    }
}