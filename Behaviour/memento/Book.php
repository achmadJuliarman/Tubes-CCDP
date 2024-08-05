<?php

include 'Memento.php';

class Book {
    private $title;
    private $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function createMemento() {
        return new Memento([$this->title, $this->price]);
    }

    public function restore(Memento $memento) {
        list($this->title, $this->price) = $memento->getState();
    }
}

?>
