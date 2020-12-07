<?php

use Makkinga\Flags\Facade;

if (! function_exists('flag')) {
    function flag()
    {
        return app(Facade::class);
    }
}
