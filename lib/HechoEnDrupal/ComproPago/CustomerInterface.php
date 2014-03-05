<?php

/**
 * file content
 * HechoEnDrupal\ComproPago\CustomerInterface.
 */

namespace HechoEnDrupal\ComproPago;

interface CustomerInterface {
	
	public function getCustomerPhone();

	public function setCustomerPhone($phone);

	public function getCustomerCompanyPhone();

	public function setCustomerCompanyPhone($company);
	
}