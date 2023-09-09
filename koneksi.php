<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "master_buku";
$port = 4306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
