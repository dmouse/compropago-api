<?php
/**
* @file
* Contain HechoEnDrupal\ComproPago\Webhook.
*/

namespace HechoEnDrupal\ComproPago;

class Webhook
{

	/**
	 * @var \stdClass
	 */
	protected $request;

	public function __construct($request = null)
	{
		if (!$request) {
			$request = file_get_contents('php://input');
		}

		$this->request = json_decode($request);
		$this->payment = new PaymentDetails($this->request->data->object->payment_details);
	}

	public function getAmount()
	{
		return $this->request->data->object->amount;
	}

	public function getCreated($format = null)
	{
		if (!$format) {
			$format = 'Y-m-d H:i:s';
		}

		$date = $this->request->data->object->created;
		return date($format,strtotime($date));
	}

	public function getID()
	{
		return $this->request->data->object->id;
	}

	public function getShortID()
	{
		return $this->request->data->object->short_id;
	}

	public function paid()
	{
		return $this->request->data->object->paid;
	}

	public function getPaymentDetails()
	{
		return $this->payment;
	}
}
