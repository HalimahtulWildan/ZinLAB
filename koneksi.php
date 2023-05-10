<?php
// Informasi koneksi database
$servername = "localhost"; // Nama server
$username = "root"; // Username database
$password = ""; // Password
$dbname = "laboratorium"; // Nama database

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
echo "Koneksi berhaseel";
?>
