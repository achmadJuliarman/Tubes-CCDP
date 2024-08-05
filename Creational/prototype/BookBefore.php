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

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
}

// Usage
$book = new Book("Design Patterns", 300);
echo $book->getTitle() . " - " . $book->getPrice() . "\n";

$book->setTitle("Clean Code");
$book->setPrice(250);
echo $book->getTitle() . " - " . $book->getPrice() . "\n";

?>
