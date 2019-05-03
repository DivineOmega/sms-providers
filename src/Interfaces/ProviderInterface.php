<?php

namespace DivineOmega\SmsProviders\Interfaces;

interface ProviderInterface
{
    public function getSupportedDestinations() : array;
}