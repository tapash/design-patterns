<?php

//reference: https://code.tutsplus.com/tutorials/design-patterns-the-strategy-pattern--cms-22796
//but I modified his solution later


class Payment
{
	public $amount;

	public function payByPaypal()
	{
		echo 'Paying '.$this->getAmount() ." using paypal";
	}

	public function payByCard()
	{
		echo 'Paying '.$this->getAmount() ." using Credit Card";
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


$payment = new Payment;

$payment->setAmount(30)->payByCard();

//we can actually make it better