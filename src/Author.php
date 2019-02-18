<?php

namespace Project;
use Project\resources\Book;

class Author
{
    public $name;
    protected $books = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function writesBook($title)
    {
        $book = new Book($title, $this);
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }
}