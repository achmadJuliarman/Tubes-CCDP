<?php

include 'Book.php';
include 'Caretaker.php';

// Usage
$book = new Book("Design Patterns", 300);
$caretaker = new Caretaker();

// Save state
$caretaker->addMemento($book->createMemento());

// Modify state
$book->setTitle("Clean Code");
$book->setPrice(250);

// Restore state
$book->restore($caretaker->getMemento(0));
echo $book->getTitle() . " - " . $book->getPrice() . "\n";

?>
