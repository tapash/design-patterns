<?php

interface Observer {
    public function addCurrency(Currency $currency);
}


class Simulator implements Observer {

    private $currencies;

    public function __construct()
    {
        $this->currencies = array();
    }

    public function addCurrency(Currency $currency)
    {
        array_push($this->currencies, $currency);
    }

    public function updatePrice()
    {
        foreach ($this->currencies as $currency) {
            $currency->update();
        }
    }
}

interface Currency {
    public function update();
    public function getPrice();
}

class Pound implements Currency {
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "<p>Pound original price: {$price}</p>";
    }

    public function update()
    {
        $this->price = $this->getPrice();
        echo "<p>Pound updated price: {$this->price}</p>";
    }

    public function getPrice() {
        return f_rand(0.65, 0.71);
    }
}


class Yen implements Currency {
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
        echo "<p>Yen original price: {$price}</p>";
    }

    public function update()
    {
        $this->price = $this->getPrice();
        echo "<p>Yen updated price: {$this->price}</p>";
    }

    public function getPrice()
    {
        return f_rand(120.52, 122.50);
    }
}

function f_rand($min=0,$max=1,$mul=1000000){
    if ($min>$max) return false;
    return mt_rand($min*$mul,$max*$mul)/$mul;
}


$simulator = new Simulator();

$pound = new Pound(1.2);
$yen = new Yen(10.5);


$simulator->addCurrency($pound);
$simulator->addCurrency($yen);

$simulator->updatePrice();








