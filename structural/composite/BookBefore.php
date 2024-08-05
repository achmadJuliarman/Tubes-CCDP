<?php

class Book {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}

class BookCollection {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }
}

// Usage
$collection = new BookCollection();
$collection->addBook(new Book("Design Patterns"));
$collection->addBook(new Book("Clean Code"));
foreach ($collection->getBooks() as $book) {
    echo $book->getTitle() . "\n";
}

?>
