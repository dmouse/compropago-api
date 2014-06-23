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
use HechoEnDrupal\ComproPago\Api;
use HechoEnDrupal\ComproPago\Charge;
use HechoEnDrupal\ComproPago\Customer;

require __DIR__ . 'vendor/autoload.php';

// ...

$api = new Api($api_key);
$product = $api->createCharge($charge);
$status = $api->getCharge($product['payment_id']);
$sms = $api->createSMS($customer,$product['payment_id']);
```

#### Webhooks
```php
use HechoEnDrupal\ComproPago\Webhook;

$webhook = new WebHook();

// Charge data
print $webhook->getAmount()."\n";
print $webhook->getCreated($format=null)."\n";
print $webhook->getID()."\n";
print $webhook->getShortID()."\n";
if ($webhook->paid()) {
  print "Paid\n";
}

// Payment Details
$payment = $webhook->getPaymentDetails();
print "Payment Details"."\n";
print $payment->getStore()."\n";
print $payment->getProductID()."\n";
print $payment->getCustomerPhone()."\n";
print $payment->getCustomerEmail()."\n";
print $payment->getCountry()."\n";
```

More information in [examples section](https://github.com/dmouse/compropago-api/tree/master/samples)
