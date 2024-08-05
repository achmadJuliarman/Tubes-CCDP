<?php

include_once 'BookComponent.php';

class BookComposite extends BookComponent {
    private $books = [];

    public function add(BookComponent $bookComponent) {
        $this->books[] = $bookComponent;
    }

    public function remove(BookComponent $bookComponent) {
        $index = array_search($bookComponent, $this->books);
        if ($index !== false) {
            unset($this->books[$index]);
        }
    }

    public function getChild($index) {
        if (isset($this->books[$index])) {
            return $this->books[$index];
        }
        return null;
    }

    public function getTitle() {
        $titles = [];
        foreach ($this->books as $book) {
            $titles[] = $book->getTitle();
        }
        return implode(", ", $titles);
    }
}

?>
