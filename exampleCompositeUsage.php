<?php

require_once 'Composite.php';

$book1 = new BookLeaf("Struktur Data Seymour", "Seymour Lipschutz");
$book2 = new BookLeaf("HTML, CSS, JavaScript Dasar", "John Doe");

$composite = new BookComposite();
$composite->addBook($book1);
$composite->addBook($book2);

echo $composite->getDetails(); // Output: Title: Struktur Data Seymour, Author: Seymour Lipschutz
                               //         Title: HTML, CSS, JavaScript Dasar, Author: John Doe
?>
