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

