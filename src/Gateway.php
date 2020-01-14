<?php

namespace Omnipay\Eshoppayment;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Eshoppayment\Message\PurchaseRequest;

class Gateway extends AbstractGateway {

	const NAME = 'Eshoppayment';

	/**
	 * {@inheritDoc}
	 */
	public function getName() {
		return self::NAME;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDefaultParameters() {
		return [
			'userNo'    => '',
			'paySecret' => '',
		];
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setUserNo($value) {
		return $this->setParameter('userNo', $value);
	}

	/**
	 * @return mixed
	 */
	public function getUserNo() {
		return $this->getParameter('userNo');
	}

	/**
	 * @param $value
	 *
	 * @return Gateway
	 */
	public function setPaySecret($value) {
		return $this->setParameter('paySecret', $value);
	}

	/**
	 * @return mixed
	 */
	public function getPaySecret() {
		return $this->getParameter('paySecret');
	}

	/**
	 * @param array $parameters
	 *
	 * @return AbstractRequest|PayUrlRequest
	 */
	public function purchase($parameters = []) {
		return $this->createRequest(PurchaseRequest::class, $parameters);
	}
}
