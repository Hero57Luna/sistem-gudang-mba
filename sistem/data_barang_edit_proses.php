<?php
    include '../koneksi.php';

    $id = $_POST['id'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $kode_supplier = $_POST['kode_suplier'];

    mysqli_query($koneksi, "UPDATE data_barang SET kode_barang = '$kode_barang',
     nama_barang = '$nama_barang' WHERE id = '$id'");

    header('location: data_barang.php?pesan=edit');
?>