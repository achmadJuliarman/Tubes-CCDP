<?php

include 'BookCollection.php';
include 'Book.php';

// Usage
$collection = new BookCollection();
$collection->addBook(new Book("Design Patterns", "Erich Gamma"));
$collection->addBook(new Book("Clean Code", "Robert C. Martin"));

$iterator = $collection->createIterator();
while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getTitle() . " by " . $book->getAuthor() . "<br>";
}

?>
