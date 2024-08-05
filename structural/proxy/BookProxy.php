<?php

include_once 'BookInterface.php';
include_once 'Book.php';

class BookProxy implements BookInterface {
    private $title;
    private $realBook;

    public function __construct($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        if ($this->realBook == null) {
            $this->realBook = new Book($this->title, "<br>This is a book about design patterns.");
        }
        return $this->realBook->getContent();
    }
}

?>
