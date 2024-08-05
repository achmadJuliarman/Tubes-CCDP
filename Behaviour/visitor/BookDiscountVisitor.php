<?php

include_once 'Visitor.php';

class BookDiscountVisitor implements Visitor {
    public function visitBook(Book $book) {
        echo $book->getTitle() . " after discount: " . $book->getPrice() * 0.9 . "\n"; // 10% discount
    }
}

?>
