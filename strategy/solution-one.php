<?php
//Strategy Pattern
//Behavioral Design Patterns

interface Fighter
{
	public function fight();
}

class Fight
{
	public function __construct(Fighter $fighter)
	{
		$fighter->fight();
	}
}


class Aggressive implements Fighter
{
	public function fight()
	{
		echo "Fight in aggressive mode";
	}
}


class Defensive implements Fighter
{
	public function fight()
	{
		echo "Fight in defensive mode";
	}
}






$fight = new Fight(new Defensive);

var_dump($fight);


