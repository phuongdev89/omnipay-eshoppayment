<?php

namespace Omnipay\Eshoppayment\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Response
 */
class PurchaseResponse extends AbstractResponse {

	/**
	 * @return bool
	 */
	public function isSuccessful() {
		return isset($this->data['code']) && $this->data['code'] == '0000';
	}

	/**
	 * @return mixed
	 */
	public function getAmount() {
		if (isset($this->data['amount'])) {
			return $this->data['amount'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getMerOrderNo() {
		if (isset($this->data['merOrderNo'])) {
			return $this->data['merOrderNo'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getOrderNo() {
		if (isset($this->data['orderNo'])) {
			return $this->data['orderNo'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getMerNo() {
		if (isset($this->data['merNo'])) {
			return $this->data['merNo'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getCurrency() {
		if (isset($this->data['currency'])) {
			return $this->data['currency'];
		}
	}

	/**
	 * @return mixed
	 */
	public function getTradeTime() {
		if (isset($this->data['tradeTime'])) {
			return $this->data['tradeTime'];
		}
	}

	/**
	 * Does the response require a redirect?
	 *
	 * @return boolean
	 */
	public function isRedirect() {
		return false;
	}

	/**
	 * Get the response data.
	 *
	 * @return mixed
	 */
	public function getData() {
		return $this->data;
	}
}
