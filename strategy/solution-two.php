<?php

interface Payment
{
	public function pay($amount);
}


class payByPaypal implements Payment
{
	public function pay($amount)
	{
		echo "Paying ".$amount." with paypal";
	}
}


class payByCard implements Payment
{
	public function pay($payment)
	{
		echo "Paying ".$amount." with Card";
	}
}

class Cart
{
	public $amount;

	public function __construct($amount)
	{
		$this->amount = $amount;
	}
	public function charge(Payment $payment)
	{
		$payment->pay($this->getAmount());
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}
}

$cart = new Cart(99);

var_dump($cart->charge(new payByPaypal));