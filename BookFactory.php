<?php

class Book {
    private $title;
    private $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getDetails() {
        return "Title: " . $this->title . ", Author: " . $this->author;
    }
}

class BookFactory {
    public static function createBook($title, $author) {
        return new Book($title, $author);
    }
}
?>
