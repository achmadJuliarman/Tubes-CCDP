<?php

include_once 'Book.php';
include_once 'BookComposite.php';

// Buku individual
$book1 = new Book("Design Patterns");
$book2 = new Book("Clean Code");

// Sub-kategori Fiksi
$fiction = new BookComposite();
$fiction->add(new Book("Dune"));
$fiction->add(new Book("The Hobbit"));

// Sub-kategori Non-Fiksi
$nonFiction = new BookComposite();
$nonFiction->add(new Book("Sapiens"));
$nonFiction->add(new Book("Homo Deus"));

// Kategori utama
$mainCategory = new BookComposite();
$mainCategory->add($fiction);
$mainCategory->add($nonFiction);
$mainCategory->add($book1);
$mainCategory->add($book2);

// Output semua buku dalam struktur Composite
echo "Semua Buku: " . $mainCategory->getTitle() . "<br>";

// Output buku dalam kategori Fiksi
echo "Buku Fiksi: " . $fiction->getTitle() . "<br>";

// Output buku dalam kategori Non-Fiksi
echo "Buku Non-Fiksi: " . $nonFiction->getTitle() . "<br>";

?>
