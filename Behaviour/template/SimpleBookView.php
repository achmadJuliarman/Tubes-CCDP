<?php

include_once 'BookViewTemplate.php';

class SimpleBookView extends BookViewTemplate {
    protected function displayTitle() {
        echo "Title: " . $this->book->getTitle() . "<br>";
    }

    protected function displayAuthor() {
        echo "Author: " . $this->book->getAuthor() . "<br>";
    }

    protected function displayCategory() {
        echo "Category: " . $this->book->getCategory() . "<br>";
    }
}

?>
