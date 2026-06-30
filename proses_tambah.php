<?php
include 'koneksi.php';

$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];

mysqli_query($conn, "INSERT INTO buku1 VALUES ('', '$kode', '$judul', '$pengarang')");

header("Location: data_buku.php");
?>