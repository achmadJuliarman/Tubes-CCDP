<?php

abstract class BookProcessor {
    public function processBook() {
        $this->fetchBook();
        $this->processDetails();
        $this->saveBook();
    }

    abstract protected function fetchBook();
    abstract protected function processDetails();
    abstract protected function saveBook();
}

class JSONBookProcessor extends BookProcessor {
    protected function fetchBook() {
        echo "Fetching book from JSON source.<br>";
    }

    protected function processDetails() {
        echo "Processing JSON book details.<br>";
    }

    protected function saveBook() {
        echo "Saving book to database.<br>";
    }
}
?>
