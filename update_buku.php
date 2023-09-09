<?php
include_once 'koneksi.php';

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$isbn = $_POST['isbn'];

$sql = "UPDATE buku SET
             judul = '$judul',
             pengarang = '$pengarang',
             tahun_terbit = '$tahun_terbit',
             isbn = '$isbn'
             WHERE id_buku = '$id_buku'";

if ($conn->query($sql) === TRUE) {
    echo "Data barang berhasil diubah.";
    header("Location: tampil_buku.php");
    exit();
} else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
}
