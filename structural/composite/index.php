<?php

include_once 'Book.php';
include_once 'BookComposite.php';

// Usage
$book1 = new Book("Design Patterns");
$book2 = new Book("Clean Code");
$composite = new BookComposite();
$composite->add($book1);
$composite->add($book2);
echo $composite->getTitle() . "\n";

?>
