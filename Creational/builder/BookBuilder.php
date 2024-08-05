<?php

include 'Book.php';

class BookBuilder {
    private $title;
    private $author;
    private $price;
    private $publisher;

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setPublisher($publisher) {
        $this->publisher = $publisher;
        return $this;
    }

    public function build() {
        return new Book($this->title, $this->author, $this->price, $this->publisher);
    }
}

?>
