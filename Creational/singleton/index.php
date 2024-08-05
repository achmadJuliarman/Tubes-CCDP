<?php

include 'Database.php';

// Usage
$db = Database::getInstance();
$conn = $db->getConnection();

if ($conn) {
    echo "Database telah terkoneksi";
} else {
    echo "Koneksi database gagal";
}

?>
