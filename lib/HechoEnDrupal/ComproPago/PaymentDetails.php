<?php
/**
* @file
* Contain HechoEnDrupal\ComproPago\PaymentDetails.
*/

namespace HechoEnDrupal\ComproPago;

class PaymentDetails
{

	protected $payment;

	public function __construct($payment_details)
	{
		$this->payment = $payment_details;
	}

	public function getStore()
	{
		return $this->payment->store;
	}

	public function getProductID()
	{
		return $this->payment->product_id;
	}

	public function getCustomerPhone()
	{
		return $this->payment->customer_phone;
	}

	public function getCustomerEmail()
	{
		return $this->payment->customer_email;
	}

	public function getCountry()
	{
		return $this->payment->country;
	}
}
