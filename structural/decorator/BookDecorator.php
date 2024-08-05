<?php

include_once 'BookComponent.php';

abstract class BookDecorator extends BookComponent {
    protected $bookComponent;

    public function __construct(BookComponent $bookComponent) {
        $this->bookComponent = $bookComponent;
    }

    public function getTitle() {
        return $this->bookComponent->getTitle();
    }

    public function getPrice() {
        return $this->bookComponent->getPrice();
    }
}

?>
