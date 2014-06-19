<?php

use HechoEnDrupal\ComproPago\Webhook;

require __DIR__.'/../vendor/autoload.php';

// -------------------------------------------
// only for test, don't use in production
 $cp_request = file_get_contents(__DIR__.'/request.json');
// --------------------------------------------

// only you need create this instance without arguments
// $webhook = new WebHook();
$webhook = new WebHook($cp_request);

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
