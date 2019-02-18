<?php

namespace Project\resources;

use Project\Author;

class Book
{
    protected $title;
    protected $author;

    public function __construct($title, Author $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}