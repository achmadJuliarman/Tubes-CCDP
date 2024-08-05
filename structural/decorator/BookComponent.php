<?php

abstract class BookComponent {
    public function getTitle() {
        throw new Exception("Unsupported operation");
    }

    public function getPrice() {
        throw new Exception("Unsupported operation");
    }
}

?>
