<?php

include 'ConcreteFactory.php';

// Usage
$factory = new ConcreteFactory();
$book = $factory->createBook("Design Patterns", "Erich Gamma");
$user = $factory->createUser("John Doe", "john@example.com");

echo $book->getTitle() . " by " . $book->getAuthor() . "\n";
echo $user->getName() . " (" . $user->getEmail() . ")\n";

?>
