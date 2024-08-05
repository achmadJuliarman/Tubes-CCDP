<?php

class Book {
    private $title;
    private $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}

class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Usage
$book = new Book("Design Patterns", "Erich Gamma");
$user = new User("John Doe", "john@example.com");

echo $book->getTitle() . " by " . $book->getAuthor() . "\n";
echo $user->getName() . " (" . $user->getEmail() . ")\n";

?>
