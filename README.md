# Laravel Flags
A Laravel Blade component for placing filetype icons

![GitHub tag (latest SemVer)](https://img.shields.io/github/tag/makkinga/laravel-flags.svg?label=version)
![GitHub tag (latest SemVer)](https://img.shields.io/github/last-commit/makkinga/laravel-flags.svg?label=Updated) 
[![Total Downloads](https://img.shields.io/packagist/dt/makkinga/laravel-flags.svg)](https://packagist.org/packages/makkinga/laravel-filetype-icons)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

<a href="https://www.buymeacoffee.com/k5DfS3Q" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

# Installation

Install using composer

```bash
composer require makkinga/laravel-flags
```

# Usage

## Blade

Use this helper to place an SVG in a Blade view. 

```blade
{!! flag()->country('nl') !!} 
```

The `country()` method expects an alpa-2 or alpha-3 ISO 3166-1 country code.
See [this page](https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes) for a complete list of all codes.

## Config

If your locales differ from the ISO codes (e.g.: you use `en` instead of `uk`), you can optionally publish the cofig to overwrite the country codes.

```shell script
php artisan vendor:publish --provider="Makkinga\Flags\ServiceProvider" --tag="config"
```

**flags.php**
```php
<?php

return [
    'locales' = []
];
```

To overwrite the codes add your locales to the `locales` array where the key is your locale and the value is the ISO country code:

```php
<?php

return [
    'locales' = [
        'en' => 'uk',
    ]
];
```

# Licence (MIT)

MIT License

Copyright (c) 2020 Gydo Makkinga <gydo@makkinga.online>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
