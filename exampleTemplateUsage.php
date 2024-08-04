<?php

require_once 'TemplateMethod.php';

$processor = new JSONBookProcessor();
$processor->processBook(); // Output: Fetching book from JSON source.
                           //         Processing JSON book details.
                           //         Saving book to database.
?>
