<?php

require_once 'BookFactory.php';

$book = BookFactory::createBook("Design Patterns", "Erich Gamma");
echo $book->getDetails(); // Output: Title: Design Patterns, Author: Erich Gamma
?>
