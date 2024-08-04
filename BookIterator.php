<?php

interface IteratorInterface {
    public function hasNext();
    public function next();
}

class BookCollection {
    private $books = [];
    private $index = 0;

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function createIterator() {
        return new BookIterator($this->books);
    }
}

class BookIterator implements IteratorInterface {
    private $books;
    private $index = 0;

    public function __construct($books) {
        $this->books = $books;
    }

    public function hasNext() {
        return $this->index < count($this->books);
    }

    public function next() {
        return $this->books[$this->index++];
    }
}
?>
