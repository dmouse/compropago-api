ComproPago API
==============

### Instalation

* Via composer
```bash
$ curl -sS https://getcomposer.org/installer | php
$ cat composer.json
{
    "require": {
      "hechoendrupal/compropago-api": "dev-beta1"
    }
}
$ ./composer.phar install
```

### Usage

```php
<?php

require __DIR__ . 'vendor/autoload.php';

//...

$api = new Api($api_key);
$product = $api->createCharge($charge);
$status = $api->getCharge($product['payment_id']);
$sms = $api->createSMS($customer,$product['payment_id']);


```

More information in [https://github.com/dmouse/compropago-api/tree/beta1/samples](samples section)
