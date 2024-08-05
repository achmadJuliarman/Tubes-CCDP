<?php

include 'AbstractFactory.php';
include 'Book.php';
include 'User.php';

class ConcreteFactory implements AbstractFactory {
    public function createBook($title, $author) {
        return new Book($title, $author);
    }

    public function createUser($name, $email) {
        return new User($name, $email);
    }
}

?>
