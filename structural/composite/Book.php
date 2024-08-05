<?php

include_once 'BookComponent.php';

class Book extends BookComponent {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }
}

?>
