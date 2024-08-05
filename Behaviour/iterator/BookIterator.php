<?php

include 'BookIteratorInterface.php';

class BookIterator implements BookIteratorInterface {
    private $books;
    private $position = 0;

    public function __construct($books) {
        $this->books = $books;
    }

    public function hasNext() {
        return $this->position < count($this->books);
    }

    public function next() {
        return $this->books[$this->position++];
    }
}

?>
