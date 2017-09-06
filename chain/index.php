<?php

abstract class HomeChecker {

	protected $successor;

	public abstract function check(HomeStatus $home);

	public function successedWith(HomeChecker $successor)
	{
		$this->successor = $successor;
	}

	public function next(HomeStatus $home) 
	{
		if($this->successor)
			$this->successor->check($home);
	}
}


class Locks extends HomeChecker{

	public function check(HomeStatus $home)
	{
		if( ! $home->locked ) {
			throw new Exception("The doors are not locked", 1);
		}	

		$this->next($home);
	}

}


class Lights extends HomeChecker {

	public function check(HomeStatus $home)
	{
		if( ! $home->lightsOff ) {
			throw new Exception("The lights are not switched off", 1);
		}	

		$this->next($home);
	}

}



class Alarm extends HomeChecker {
	
	public function check(HomeStatus $home)
	{
		if( ! $home->alarmOn ) {
			throw new Exception("The alamr are not locked", 1);
		}	

		$this->next($home);
	}
}



class HomeStatus {
	public $alarmOn = true;
	public $lightsOff = true;
	public $locked = true;
}


$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->successedWith($lights);
$lights->successedWith($alarm);

$status = new HomeStatus;

//$locks->check($status);
$locks->check($status);