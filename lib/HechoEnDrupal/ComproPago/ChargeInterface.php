<?php

namespace HechoEnDrupal\ComproPago;

interface ChargeInterface {

	public function getCurrency();
	public function setCurrency($currency);

	public function getProductPrice();
	public function setProductPrice($product_price);

	public function getProductName();
	public function setProductName($product_name);

	public function getProductId();
	public function setProductId($product_id);

	public function getImageUrl();
	public function setImageUrl($image_url);

	public function getCustomerName();
	public function setCustomerName($customer_name);

	public function getCustomerEmail();
	public function setCustomerEmail($customer_email);

	public function getCustomerPhone();
	public function setCustomerPhone($customer_phone);

	public function getPaymentType();
	public function setPaymentType($payment_type);

	public function getSendSMS();
	public function setSendSMS($send_sms);

}