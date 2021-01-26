<?php
include '../koneksi.php';

$kode_barang = mysqli_real_escape_string($koneksi, $_POST['kode_barang']);
$nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang']);
$stok = mysqli_real_escape_string($koneksi, $_POST['stok']);
$kode_supplier = mysqli_real_escape_string($koneksi, $_POST['kode_supplier']);

$query = mysqli_query($koneksi, "INSERT INTO data_barang VALUES ('', '$kode_barang', '$nama_barang', '$stok', '$kode_supplier')");
header('location: data_barang.php?pesan=tambah');

?>