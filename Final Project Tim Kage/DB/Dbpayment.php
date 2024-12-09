<?php
$host = "localhost"; // Nama host database
$dbname = "zahrarental"; // Nama database
$username = "root"; // Username MySQL Anda
$password = ""; // Password MySQL Anda (kosongkan jika tidak ada)

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
