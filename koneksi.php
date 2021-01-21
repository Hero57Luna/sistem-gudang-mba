<?php

$connection = "localhost";
$database = "root";
$password = "";
$db_name = "gudang_mba";

$koneksi = mysqli_connect($connection, $database, $password, $db_name);
if(mysqli_connect_errno()) {
    echo "Koneksi ke database gagal : " . mysqli_connect_error();
}

?>