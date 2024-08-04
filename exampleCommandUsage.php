<?php

require_once 'Command.php';
require_once 'Book.php';

$book = new BasicBook("Struktur Data Seymour", "Seymour Lipschutz");
$addBookCommand = new AddBookCommand($book);

$invoker = new BookInvoker();
$invoker->setCommand($addBookCommand);
$invoker->executeCommand(); // Output: Adding book: Title: Struktur Data Seymour, Author: Seymour Lipschutz
?>
