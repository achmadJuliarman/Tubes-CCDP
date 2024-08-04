<?php

require_once 'BookIterator.php';
require_once 'Book.php';

$book1 = new BasicBook("Struktur Data Seymour", "Seymour Lipschutz");
$book2 = new BasicBook("HTML, CSS, JavaScript Dasar", "John Doe");

$bookCollection = new BookCollection();
$bookCollection->addBook($book1);
$bookCollection->addBook($book2);

$iterator = $bookCollection->createIterator();

while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getDetails() . "<br>";
}
?>
