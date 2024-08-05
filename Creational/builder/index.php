<?php

include 'BookBuilder.php';

// Usage
$builder = new BookBuilder();
$book = $builder->setTitle("Design Patterns")
                ->setAuthor("Erich Gamma")
                ->setPrice(50000)
                ->setPublisher("Addison-Wesley")
                ->build();

echo $book->getTitle() . " by " . $book->getAuthor() . ", published by " . $book->getPublisher() . ", priced at " . $book->getPrice() . "\n";

?>
