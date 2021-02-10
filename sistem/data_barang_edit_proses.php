<?php
    include '../koneksi.php';

    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $kode_barang = mysqli_real_escape_string($koneksi, $_POST['kode_barang']);
    $nama_barang = mysqli_real_escape_string($koneksi, $_POST['nama_barang']);
    $stok = mysqli_real_escape_string($koneksi, $_POST['stok']);
    $kode_supplier = mysqli_real_escape_string($koneksi, $_POST['kode_supplier']);

    mysqli_query($koneksi, "UPDATE data_barang SET kode_barang = '$kode_barang',
     nama_barang = '$nama_barang',
     stok = '$stok',
     kode_supplier = '$kode_supplier' WHERE id = '$id'");

    header('location: data_barang.php?pesan=edit');
?>