<?php

include 'BookIterator.php';

class BookCollection {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function createIterator() {
        return new BookIterator($this->books);
    }
}

?>
