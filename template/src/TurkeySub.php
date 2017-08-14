<?php
namespace App;

class TurkeySub extends Sub
{
	public function addTroppings()
	{
		var_dump('adding turkeys');

		return $this;
	}
}