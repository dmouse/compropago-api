<?php

/**
 * File content
 * \HechoEnDrupal\ComproPago\API
 */

namespace HechoEnDrupal\ComproPago;

use Guzzle\Http\Client;

class Api {

	/**
	 * API Key
	 * @var string 
	 */
	private $api_key;
	
	/**
	 * API constructor 
	 * @param string $api_key API key
	 */
	public function __construct($api_key){

		$this->api_key = $api_key;
		$this->client = new Client('https://api.compropago.com');
		
	}

	public function createCharge(Charge $charge){

		$c = [];
		$c['currency'] = $charge->getCurrency();
		$c['product_price'] = $charge->getProductPrice();
		$c['product_name'] = $charge->getProductName();
		$c['product_id'] = $charge->getProductId();
		$c['image_url'] = $charge->getImageUrl();
		$c['customer_name'] = $charge->getCustomerName();
		$c['customer_email'] = $charge->getCustomerEmail();
		$c['customer_phone'] = $charge->getCustomerPhone();
		$c['payment_type'] = $charge->getPaymentType();
		$c['send_sms'] = $charge->getSendSMS();

		return $this->sendCharge($c);
	}

	/**
	 * send charge
	 * @param  array  $charge 
	 * @return array  return 
	 */
	public function sendCharge(array $charge){
		$request = $this->client->post('/v1/charges', null, $charge);
		$request->setAuth($this->api_key,'');
		$response = $request->send()->json();
		return $response;
	}

	/**
	 * Get charge status
	 * @param  string $id transaction id 
	 * @return array transaction status
	 */
	public function getCharge($id){
		$request = $this->client->get('/v1/charges/'.$id);
		$request->setAuth($this->api_key,'');
		$response = $request->send()->json();
		return $response;	
	}

	/**
	 * create sms
	 * @return [type] [description]
	 */
	public function createSMS(CustomerInterface $customer, $id){

		$c = [];
		$c['customer_phone'] = $customer->getCustomerPhone();
		$c['customer_company_phone'] = $customer->getCustomerCompanyPhone();
		return $this->sendSMS($c, $id);

	}

	/**
	 * Send sms to customer
	 * @return [type] [description]
	 */
	public function sendSMS(array $customer, $id){
		$request = $this->client->post('/v1/charges/'.$id.'/sms',null,$customer);
		$request->setAuth($this->api_key,'');
		$response = $request->send()->json();
		return $response;		
	}

}