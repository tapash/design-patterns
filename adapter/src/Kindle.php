<?php
namespace App;


class Kindle implements eReaderInterface
{
	public function turnOn()
	{
		var_dump("Open the kindle book");
	}

	public function turnNextButton()
	{
		var_dump("Turn the kindle book");
	}
}