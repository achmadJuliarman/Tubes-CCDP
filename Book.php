<?php

interface Book {
    public function getDetails();
}

class BasicBook implements Book {
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
?>
