<?php
include_once 'koneksi.php';

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}
$id_buku = $_GET['id_buku'];

$sql = "DELETE from buku
            WHERE id_buku = '$id_buku'";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Data berhasil dihapus.");
          </script>';
    header("Location: tampil_buku.php");
    exit();
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}
