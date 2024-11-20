<?php
// Menyambung ke database MySQL
$servername = "localhost";  // Ganti dengan server Anda (misal, localhost)
$username = "root";         // Ganti dengan username database Anda
$password = "";             // Ganti dengan password database Anda
$dbname = "multipay";  // Ganti dengan nama database Anda
$port=3307;

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname,$port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
