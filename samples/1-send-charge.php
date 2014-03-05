<?php

use HechoEnDrupal\ComproPago\Api;
use HechoEnDrupal\ComproPago\Charge;
use HechoEnDrupal\ComproPago\Customer;

require __DIR__ . '/../vendor/autoload.php';

$api_key = 'sk_test_XXXXXXXXXXXXX';

$charge = new Charge([
	'currency' => 'MXN',
  'product_price' => '10000.0',
  'product_name' => 'SAMSUNG GOLD',
  'product_id'=> 'SMGCURL1',
  'image_url'=> 'http://hechoendrupal.com/img/logo.png',
  'customer_name'=> 'Alejandra Leyva',
  'customer_email'=> 'noreply@compropago.com',
  'customer_phone'=> '2222222222',
  'payment_type'=> 'CHEDRAUI',
  'send_sms'=> false
]);

//
// Create new charge
//
$api = new Api($api_key);
$product = $api->createCharge($charge);
print_r($product);
$status = $api->getCharge($product['payment_id']);
print_r($status);

// 
// Send sms
//
$customer = new Customer([
	'customer_phone' => '2222222222',
	'customer_company_phone' => 'TELCEL'
]);

print_r($api->createSMS($customer,$product['payment_id']));
