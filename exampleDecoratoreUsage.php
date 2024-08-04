<?php

require_once 'Book.php';
require_once 'BookDecorator.php';

$book = new BasicBook("Struktur Data Seymour", "Seymour Lipschutz");
echo $book->getDetails(); // Output: Title: Struktur Data Seymour, Author: Seymour Lipschutz

$favoriteBook = new FavoriteBook($book);
echo $favoriteBook->getDetails(); // Output: Title: Struktur Data Seymour, Author: Seymour Lipschutz [Favorite]
?>
