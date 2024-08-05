<?php

include_once 'BookDecorator.php';

class FavoritBook extends BookDecorator {
    public function getTitle() {
        return $this->bookComponent->getTitle() . " (Favorit)";
    }

    public function getPrice() {
        return $this->bookComponent->getPrice();
    }
}

?>
