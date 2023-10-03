<?php
// Mendefinisikan parameter koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sipmas_master";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
