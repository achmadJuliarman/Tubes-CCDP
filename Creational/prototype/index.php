<?php

include 'Book.php';

// Usage
$book1 = new Book("Design Patterns", 300);
$book2 = $book1->clone();

echo $book1->getTitle() . " - " . $book1->getPrice() . "\n";
echo $book2->getTitle() . " - " . $book2->getPrice() . "\n";

?>
