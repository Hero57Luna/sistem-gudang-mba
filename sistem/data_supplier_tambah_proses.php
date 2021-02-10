<?php
include '../koneksi.php';

$kode_supplier = mysqli_real_escape_string($koneksi, $_POST['kode_supplier']);
$nama_supplier = mysqli_real_escape_string($koneksi, $_POST['nama_supplier']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

$sql = "INSERT INTO data_supplier VALUES ('', '$kode_supplier', '$nama_supplier', '$alamat')";
$query = mysqli_query($koneksi, $sql);
header('location: data_supplier.php?pesan=tambah');

?>