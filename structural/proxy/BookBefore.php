<?php

class Book {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }
}

// Usage
$book = new Book("Design Patterns", "This is a book about design patterns.");
echo $book->getTitle() . "\n";
echo $book->getContent() . "\n";

?>
