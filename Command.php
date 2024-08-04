<?php

interface Command {
    public function execute();
}

class AddBookCommand implements Command {
    private $book;

    public function __construct($book) {
        $this->book = $book;
    }

    public function execute() {
        echo "Adding book: " . $this->book->getDetails() . "<br>";
    }
}

class BookInvoker {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function executeCommand() {
        $this->command->execute();
    }
}
?>
