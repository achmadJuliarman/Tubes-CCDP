<?php

include_once 'Book.php';
include_once 'FavoritBook.php';

// Usage
$book = new Book("Design Patterns", 50000);
$favoritBook = new FavoritBook($book);
echo $favoritBook->getTitle() . ": " . $favoritBook->getPrice() . "\n";

?>
