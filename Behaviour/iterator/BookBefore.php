<?php

class Book {
    private $title;
    private $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
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
$collection->addBook(new Book("Design Patterns", "Erich Gamma"));
$collection->addBook(new Book("Clean Code", "Robert C. Martin"));

foreach ($collection->getBooks() as $book) {
    echo $book->getTitle() . " by " . $book->getAuthor() . "\n";
}

?>
