<?php

abstract class BookDecorator implements Book {
    protected $book;

    public function __construct(Book $book) {
        $this->book = $book;
    }

    abstract public function getDetails();
}

class FavoriteBook extends BookDecorator {
    public function getDetails() {
        return $this->book->getDetails() . " [Favorite]";
    }
}
?>
