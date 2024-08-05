<?php

include_once 'BookElement.php';

class Book implements BookElement {
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

    public function accept($visitor) {
        $visitor->visitBook($this);
    }
}

?>
