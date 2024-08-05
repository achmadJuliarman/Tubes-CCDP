<?php

class Book {
    private $title;
    private $author;
    private $price;
    private $publisher;

    public function __construct($title, $author, $price, $publisher) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->publisher = $publisher;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPublisher() {
        return $this->publisher;
    }
}

?>
