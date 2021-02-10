<?php
include '../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$kode_supplier = mysqli_real_escape_string($koneksi, $_POST['kode_supplier']);
$nama_supplier = mysqli_real_escape_string($koneksi, $_POST['nama_supplier']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

$sql = "UPDATE data_supplier SET kode_supplier = '$kode_supplier', nama_supplier = '$nama_supplier', alamat = '$alamat' WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);
header('location: data_supplier.php?pesan=edit');

?>