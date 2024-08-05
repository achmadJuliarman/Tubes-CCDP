<?php

abstract class BookComponent {
    public function getTitle() {
        throw new Exception("Unsupported operation");
    }

    public function add(BookComponent $bookComponent) {
        throw new Exception("Unsupported operation");
    }

    public function remove(BookComponent $bookComponent) {
        throw new Exception("Unsupported operation");
    }

    public function getChild($index) {
        throw new Exception("Unsupported operation");
    }
}

?>
