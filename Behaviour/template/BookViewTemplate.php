<?php

abstract class BookViewTemplate {
    protected $book;

    public function __construct($book) {
        $this->book = $book;
    }

    public function display() {
        $this->displayTitle();
        $this->displayAuthor();
        $this->displayCategory();
    }

    protected abstract function displayTitle();
    protected abstract function displayAuthor();
    protected abstract function displayCategory();
}

?>
