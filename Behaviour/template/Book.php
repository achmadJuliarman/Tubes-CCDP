<?php

include_once 'BookCategory.php';

class Book {
    private $title;
    private $author;
    private $category;

    public function __construct($title, $author, BookCategory $category) {
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
        return $this->category->getName();
    }
}

?>
