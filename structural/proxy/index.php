<?php

include_once 'BookProxy.php';

// Usage
$bookProxy = new BookProxy("Design Patterns");
echo $bookProxy->getTitle() . "\n";
echo $bookProxy->getContent() . "\n";

?>
