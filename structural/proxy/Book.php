<?php

include_once 'BookInterface.php';

class Book implements BookInterface {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }
}

?>
