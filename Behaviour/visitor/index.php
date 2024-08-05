<?php

include_once 'Book.php';
include_once 'BookDiscountVisitor.php';

// Usage
$book = new Book("Design Patterns", 50000);
$discountVisitor = new BookDiscountVisitor();
$book->accept($discountVisitor);

?>
