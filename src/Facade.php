<?php

namespace Makkinga\Flags;

use Illuminate\Support\Str;

class Facade
{
    /**
     * Facade constructor.
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * @param string $countryCode
     * @return mixed
     */
    public function country(string $countryCode)
    {
        if (in_array(Str::lower($countryCode), config('flags.aliases'))) {
            $countryCode = config('flags.aliases')[Str::lower($countryCode)];
        }

        $country = collect(require __DIR__ . '/iso-codes.php')->filter(function ($value, $key) use ($countryCode) {
            return in_array(Str::upper($countryCode), [$value['alpha-2'], $value['alpha-3']]);
        })->first();

        if (! $country) {
            throw new Exception("No country was found for [$countryCode]. Please check the ISO 3166 country codes for the correct code");
        }

        $svg = file_get_contents(__DIR__ . '/svg/' . Str::slug($country['name']) . '.svg');

        return $svg;
    }

    /**
     * @param string $countryCode
     * @return mixed
     */
    public function countryInfo(string $countryCode)
    {
        $country = collect(require __DIR__ . '/iso-codes.php')->filter(function ($value, $key) use ($countryCode) {
            return in_array(Str::upper($countryCode), [$value['alpha-2'], $value['alpha-3']]);
        })->first();

        return $country;
    }
}
