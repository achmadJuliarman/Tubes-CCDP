<?php

interface AbstractFactory {
    public function createBook($title, $author);
    public function createUser($name, $email);
}

?>
