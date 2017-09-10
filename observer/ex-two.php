<?php

interface Subject {
    public function addCurrency(Observer $observer);
    public function removeCurrency(Observer $observer);
    public function notify();
}

interface Observer {
    public function update();
}

class Currency implements Subject {
    private $currencies = [];

    public function addCurrency(Observer $observer) 
    {
        $this->currencies[] = $observer;

        return $this;
    }

    public function removeCurrency(Observer $observer) 
    {
        if($key = array_search($observer, $this->currencies)) {
            unset($this->currencies[$key]);
        }

    }

    public function notify()
    {
        foreach ($this->currencies as $currency) {
            $currency->update();
        }
    }

    public function fire()
    {
        $this->notify();
    }
}

class Pound implements Observer {

    public function __construct() 
    {
        var_dump('Pound original price');
    }


    public function update()
    {
        var_dump('pound is updated');
    }

}

class Yen implements Observer {

    public function __construct() 
    {
        var_dump('Yen original price');
    }


    public function update()
    {
        var_dump('Yen is updated');
    }

}

$currency = new Currency;

$currency->addCurrency(new Pound)->addCurrency(new Yen);


$currency->fire();