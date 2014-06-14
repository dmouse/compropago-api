ComproPago API
==============
[![Latest Stable Version](https://poser.pugx.org/hechoendrupal/compropago-api/v/stable.svg)](https://packagist.org/packages/hechoendrupal/compropago-api) [![Total Downloads](https://poser.pugx.org/hechoendrupal/compropago-api/downloads.svg)](https://packagist.org/packages/hechoendrupal/compropago-api) [![Latest Unstable Version](https://poser.pugx.org/hechoendrupal/compropago-api/v/unstable.svg)](https://packagist.org/packages/hechoendrupal/compropago-api) [![License](https://poser.pugx.org/hechoendrupal/compropago-api/license.svg)](https://packagist.org/packages/hechoendrupal/compropago-api)

### Instalation

* Via composer
```bash
$ curl -sS https://getcomposer.org/installer | php
$ cat composer.json
{
    "require": {
      "hechoendrupal/compropago-api": "~1.0"
    }
}
$ ./composer.phar install
```

### Usage

```php
<?php

use HechoEnDrupal\ComproPago\Api;
use HechoEnDrupal\ComproPago\Charge;
use HechoEnDrupal\ComproPago\Customer;

require __DIR__ . 'vendor/autoload.php';

//...

$api = new Api($api_key);
$product = $api->createCharge($charge);
$status = $api->getCharge($product['payment_id']);
$sms = $api->createSMS($customer,$product['payment_id']);


```

More information in [examples section](https://github.com/dmouse/compropago-api/tree/beta1/samples)
