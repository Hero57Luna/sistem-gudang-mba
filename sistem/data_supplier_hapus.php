<?php
include '../koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM data_supplier WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

header('location: data_supplier.php?pesan=hapus');
?>