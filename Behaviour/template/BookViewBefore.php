<?php

class BookView {
    private $book;

    public function __construct($book) {
        $this->book = $book;
    }

    public function display() {
        echo "Title: " . $this->book->getTitle() . "\n";
        echo "Author: " . $this->book->getAuthor() . "\n";
        echo "Category: " . $this->book->getCategory() . "\n";
    }
}

// Usage
$book = new Book("Design Patterns", "Erich Gamma", "Programming");
$view = new BookView($book);
$view->display();

?>
