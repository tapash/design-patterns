<?php
namespace App;

abstract class Sub 
{
	public function make()
	{
		return $this
			->layBread()
			->addLettuce()
			->addTroppings()
			->addSauces();
	}

	protected function layBread()
	{
		var_dump('laying down the bread');

		return $this;
	}

	protected function addLettuce()
	{
		var_dump('add some lettuce');

		return $this;
	}

	protected function addTurkey()
	{
		var_dump('add turkey sub');

		return $this;
	}

	protected function addSauces()
	{
		var_dump('adding sauces finally');

		return $this;
	}

	protected abstract function addTroppings();
}