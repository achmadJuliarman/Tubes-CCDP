<?php

class Book {
    private $title;
    private $author;
    private $category;

    public function __construct($title, $author, $category) {
        $this->title = $title;
        $this->author = $author;
        $this->category = $category;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getCategory() {
        return $this->category;
    }
}

// Usage
$book = new Book("Design Patterns", "Erich Gamma", "Programming");
echo $book->getTitle() . "\n";
echo $book->getAuthor() . "\n";
echo $book->getCategory() . "\n";

?>
