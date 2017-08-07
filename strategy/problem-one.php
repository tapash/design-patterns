<?php


class Fighter
{
	public function setHealth($value)
	{
		$this->value = $value;
		return $this;
	}

	public function getHealth()
	{
		return $this->value;
	}


	public function changeMode($mode)
	{
		switch ($mode) {
			case 'aggressive':
				$this->setAggressive();
				break;
			case 'defensive':
				$this->setDefensive();
				break;
		}
	}

	public function setAggressive()
	{
		return 'set aggressive ';
	}

	public function setDefensive()
	{
		return 'set defensive ';
	}
}

//client code

$fighter = new Fighter;

$health = $fighter->setHealth(100)->getHealth();

if ($health <= 50) {
	var_dump($fighter->setDefensive());
}else if($health >= 50) {
	var_dump($fighter->setAggressive());
}

/**
 Problem in this block of code
 1. It breaks OCP(Open Close Principle) rule. (OCP: A class is open for extend not for modification)
 2. We can't add new mode instaed of changing the main class
 3. It also breaks the Principle of Lest Knowledge
 */

