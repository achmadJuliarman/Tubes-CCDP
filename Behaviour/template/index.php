<?php

include_once 'SimpleBookView.php';
include_once 'Book.php';

// Usage
$category = new BookCategory("Programming");
$book = new Book("Design Patterns", "Erich Gamma", $category);
$view = new SimpleBookView($book);
$view->display();

?>
