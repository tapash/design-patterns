<?php
namespace App;

class Book implements BookInterface
{
	public function open()
	{
		var_dump('reading the paper book');
	}

	public function turn()
	{
		var_dump('turn the paper book');
	}
}