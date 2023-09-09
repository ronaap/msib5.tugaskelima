<?php

include_once('koneksi.php');

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun_terbit = $_POST['tahun_terbit'];
$isbn = $_POST['isbn'];

$sql = "INSERT INTO buku (judul, pengarang, tahun_terbit, isbn)
        VALUES ('$judul', '$pengarang', '$tahun_terbit', '$isbn')";

if ($conn->query($sql) === TRUE) {
    echo "Data Berhasil Disimpan.";
    header("Location: tampil_buku.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
