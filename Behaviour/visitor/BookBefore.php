<?php

class Book {
    private $title;
    private $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }
}

class BookDiscount {
    private $book;

    public function __construct($book) {
        $this->book = $book;
    }

    public function calculate() {
        return $this->book->getPrice() * 0.9; // 10% discount
    }
}

// Usage
$book = new Book("Design Patterns", 50000);
$discount = new BookDiscount($book);
echo $discount->calculate() . "\n";

?>
