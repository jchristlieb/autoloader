<?php

require 'index.php';
use Project\Author;

$author = new Author('Ben Hardy');
$author->writesBook('Willpower doesn\'t work', $author);

var_dump($author->getBooks());
