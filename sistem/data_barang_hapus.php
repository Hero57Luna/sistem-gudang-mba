<?php
include '../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM data_barang WHERE id = '$id'");

header('location: data_barang.php?pesan=hapus');

?>