<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$data = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($data);

if($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'logged_in';
    header('location: sistem/index.php');
}
else {
    header('location: login.php?pesan=gagal');
}
?>