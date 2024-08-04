<?php

interface BookComponent {
    public function getDetails();
}

class BookLeaf implements BookComponent {
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

class BookComposite implements BookComponent {
    private $books = [];

    public function addBook(BookComponent $book) {
        $this->books[] = $book;
    }

    public function getDetails() {
        $details = "";
        foreach ($this->books as $book) {
            $details .= $book->getDetails() . "<br>";
        }
        return $details;
    }
}
?>
