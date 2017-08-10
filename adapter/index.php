<?php

require 'vendor/autoload.php';
use App\Book;
use App\BookInterface;
use App\Kindle;
use App\KindleAdapter;

class Person
{
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turn();
	}
}



(new Person)->read(new Book);
//good we can read paper book, what will happen if we want to use Kindle ebook, crap? Then we need
//some adapter to use kindle with this class

(new Person)->read(new KindleAdapter(new Kindle));