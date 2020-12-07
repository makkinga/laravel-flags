<?php

use Makkinga\Flags\Facade;

if (! function_exists('flag')) {
    function flag(string $countryCode)
    {
        ddd($countryCode); // REMOVE
        return app(Facade::class)->get($countryCode);
    }
}
