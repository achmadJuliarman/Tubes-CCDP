<?php

include_once 'Book.php';
include_once 'BookCategoryFactory.php';

// Usage
$category = BookCategoryFactory::getCategory("Programming");
$book = new Book("Design Patterns", "Erich Gamma", $category);
echo $book->getTitle() . "<br>";
echo $book->getAuthor() . "<br>";
echo $book->getCategory() . "<br>";

?>
