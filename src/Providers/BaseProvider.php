<?php


namespace DivineOmega\SmsProviders\Providers;

use DivineOmega\Countries\Countries;
use DivineOmega\SmsProviders\Interfaces\ProviderInterface;

abstract class BaseProvider implements ProviderInterface
{
    protected $supportedDestinationCountryCodes = [];

    public function getSupportedDestinationCountries() : array
    {
        $supportedDestinationCountries = [];
        $countries = new Countries();

        foreach ($this->supportedDestinationCountryCodes as $countryCode) {
            $supportedDestinationCountries[] = $countries->getByIsoCode($countryCode);
        }

        return $supportedDestinationCountries;
    }
}