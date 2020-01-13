<?php

namespace Omnipay\Coinpayments\Message;

use Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;

/**
 * Class AbstractRequest
 * @package Omnipay\Coinpayments\Message
 */
abstract class AbstractRequest extends BaseAbstractRequest {

	protected $liveEndpoint = "http://www.helloyoushop.com/card/doPay";

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setAddress($value) {
		return $this->setParameter('address', $value);
	}

	/**
	 * @return mixed
	 */
	public function getAddress() {
		return $this->getParameter('address');
	}

	/**
	 * @param \Omnipay\Common\CreditCard $value
	 *
	 * @return AbstractRequest|BaseAbstractRequest
	 */
	public function setCard($value) {
		return $this->setParameter('card', $value);
	}

	/**
	 * @return mixed|\Omnipay\Common\CreditCard
	 */
	public function getCard() {
		return $this->getParameter('card');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setCity($value) {
		return $this->setParameter('city', $value);
	}

	/**
	 * @return mixed
	 */
	public function getCity() {
		return $this->getParameter('city');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setCountry($value) {
		return $this->setParameter('country', $value);
	}

	/**
	 * @return mixed
	 */
	public function getCountry() {
		return $this->getParameter('country');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setEmail($value) {
		return $this->setParameter('email', $value);
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->getParameter('email');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setFirstName($value) {
		return $this->setParameter('firstName', $value);
	}

	/**
	 * @return mixed
	 */
	public function getFirstName() {
		return $this->getParameter('firstName');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setLastName($value) {
		return $this->setParameter('lastName', $value);
	}

	/**
	 * @return mixed
	 */
	public function getLastName() {
		return $this->getParameter('lastName');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setMerOrderNo($value) {
		return $this->setParameter('merOrderNo', $value);
	}

	/**
	 * @return mixed
	 */
	public function getMerOrderNo() {
		return $this->getParameter('merOrderNo');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setOrderPrice($value) {
		return $this->setParameter('orderPrice', $value);
	}

	/**
	 * @return mixed
	 */
	public function getOrderPrice() {
		return $this->getParameter('orderPrice');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setPhone($value) {
		return $this->setParameter('phone', $value);
	}

	/**
	 * @return mixed
	 */
	public function getPhone() {
		return $this->getParameter('phone');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setProductInfo($value) {
		return $this->setParameter('productInfo', $value);
	}

	/**
	 * @return mixed
	 */
	public function getProductInfo() {
		return $this->getParameter('productInfo');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setState($value) {
		return $this->setParameter('state', $value);
	}

	/**
	 * @return mixed
	 */
	public function getState() {
		return $this->getParameter('state');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setZipCode($value) {
		return $this->setParameter('zipCode', $value);
	}

	/**
	 * @return mixed
	 */
	public function getZipCode() {
		return $this->getParameter('zipCode');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
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
	 * @return AbstractRequest
	 */
	public function setIp($value) {
		return $this->setParameter('ip', $value);
	}

	/**
	 * @return mixed
	 */
	public function getIp() {
		return $this->getParameter('ip');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setRequestUrl($value) {
		return $this->setParameter('requestUrl', $value);
	}

	/**
	 * @return mixed
	 */
	public function getRequestUrl() {
		return $this->getParameter('requestUrl');
	}

	/**
	 * @param $value
	 *
	 * @return AbstractRequest
	 */
	public function setLanguage($value) {
		return $this->setParameter('language', $value);
	}

	/**
	 * @return mixed
	 */
	public function getLanguage() {
		return $this->getParameter('language');
	}

	/**
	 * @param string $value
	 *
	 * @return AbstractRequest|BaseAbstractRequest
	 */
	public function setCurrency($value) {
		return $this->setParameter('currency', $value);
	}

	/**
	 * @return mixed|string
	 */
	public function getCurrency() {
		return $this->getParameter('currency');
	}

	/**
	 * @return string
	 */
	protected function getEndpoint() {
		return $this->liveEndpoint;
	}
}
