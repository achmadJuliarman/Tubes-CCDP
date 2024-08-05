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

// Usage
$book = new Book("Design Patterns", 50000);
echo $book->getTitle() . ": " . $book->getPrice() . "\n";

?>
