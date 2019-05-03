<?php


namespace DivineOmega\SmsProviders\Providers;

use DivineOmega\Countries\Countries;
use DivineOmega\SmsProviders\Utils\Providers;
use DivineOmega\SmsProviders\Interfaces\ProviderInterface;

abstract class BaseProvider implements ProviderInterface
{
    protected $destinationCountryNames = [];

    public function getSupportedDestinations() : array
    {
        $supportedDestinations = [];
        $countries = new Countries();

        foreach ($this->destinationCountryNames as $countryName) {
            $country = $countries->getByName($countryName);
            if ($country) {
                $supportedDestinations[] = $country;
            }
        }

        return $supportedDestinations;
    }
}