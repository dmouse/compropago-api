<?php

/**
 * File content
 * \HechoEnDrupal\ComproPago\Charge
 */

namespace HechoEnDrupal\ComproPago;


class Charge implements ChargeInterface{

  private $currency;
  
  private $product_price;

  private $product_name;

  private $product_id;

  private $image_url;

  private $customer_name;

  private $customer_email;

  private $customer_phone;

  private $payment_type;

  private $send_sms;

  public function __construct(array $charge = array()){

    $this->setCurrency($charge['currency']);
    $this->setProductPrice($charge['product_price']);
    $this->setProductName($charge['product_name']);
    $this->setProductId($charge['product_id']);
    $this->setImageUrl($charge['image_url']);
    $this->setCustomerName($charge['customer_name']);
    $this->setCustomerEmail($charge['customer_email']);
    $this->setCustomerPhone($charge['customer_phone']);
    $this->setPaymentType($charge['payment_type']);
    $this->setSendSMS($charge['send_sms']);
  }


  /**
   * Gets the value of product_price.
   *
   * @return float
   */
  public function getCurrency(){
    return $this->currency;
  }
  
  /**
   * Sets the value of product_price.
   *
   * @param float $product_price the product_price
   */
  public function setCurrency($currency){
    $this->currency = $currency;
  }

  /**
   * Gets the value of product_price.
   *
   * @return float
   */
  public function getProductPrice(){
    return $this->product_price;
  }
  
  /**
   * Sets the value of product_price.
   *
   * @param float $product_price the product_price
   */
  public function setProductPrice($product_price){
    $this->product_price = $product_price;
  }

  /**
   * Gets the value of product_name.
   *
   * @return mixed
   */
  public function getProductName(){
    return $this->product_name;
  }
  
  /**
   * Sets the value of product_name.
   *
   * @param mixed $product_name the product_name
   */
  public function setProductName($product_name){
    $this->product_name = $product_name;
  }

  /**
   * Gets the value of product_id.
   *
   * @return mixed
   */
  public function getProductId(){
    return $this->product_id;
  }
  
  /**
   * Sets the value of product_id.
   *
   * @param mixed $product_id the product_id
   */
  public function setProductId($product_id){
    $this->product_id = $product_id;
  }

  /**
   * Gets the value of image_url.
   *
   * @return mixed
   */
  public function getImageUrl(){
    return $this->image_url;
  }
  
  /**
   * Sets the value of image_url.
   *
   * @param mixed $image_url the image_url
   */
  public function setImageUrl($image_url){
      $this->image_url = $image_url;
  }

  /**
   * Gets the value of customer_name.
   *
   * @return mixed
   */
  public function getCustomerName(){
    return $this->customer_name;
  }
  
  /**
   * Sets the value of customer_name.
   *
   * @param mixed $customer_name the customer_name
   */
  public function setCustomerName($customer_name){
    $this->customer_name = $customer_name;
  }

  /**
   * Gets the value of customer_email.
   *
   * @return mixed
   */
  public function getCustomerEmail(){
    return $this->customer_email;
  }
  
  /**
   * Sets the value of customer_email.
   *
   * @param mixed $customer_email the customer_email
   */
  public function setCustomerEmail($customer_email){
    $this->customer_email = $customer_email;
  }

  /**
   * Gets the value of customer_phone.
   *
   * @return mixed
   */
  public function getCustomerPhone(){
    return $this->customer_phone;
  }
  
  /**
   * Sets the value of customer_phone.
   *
   * @param mixed $customer_phone the customer_phone
   */
  public function setCustomerPhone($customer_phone){
    $this->customer_phone = $customer_phone;
  }

  /**
   * Gets the value of payment_type.
   *
   * @return mixed
   */
  public function getPaymentType(){
    return $this->payment_type;
  }
  
  /**
   * Sets the value of payment_type.
   *
   * @param mixed $payment_type the payment_type
   */
  public function setPaymentType($payment_type){
    $this->payment_type = $payment_type;
  }

  /**
   * Gets the value of send_sms.
   *
   * @return mixed
   */
  public function getSendSMS(){
    return $this->send_sms;
  }
  
  /**
   * Sets the value of send_sms.
   *
   * @param mixed $send_sms the send_sms
   *
   * @return self
   */
  public function setSendSMS($send_sms){
    $this->send_sms = $send_sms;
  }
}