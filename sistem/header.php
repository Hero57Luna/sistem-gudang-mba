<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/select2.min.css">
    <title>Sistem Gudang</title>
</head>
<body style="background: #d1e4ed">

    <?php
    session_start();
    if($_SESSION['status'] != 'logged_in') {
        header('location: ../login.php?pesan=belum_login');
    }
    ?>

    <nav class="navbar navbar-dark bg-dark navbar-expand" style="border-radius: 0px">
        <a class="navbar-brand" href="index.php">Sistem Gudang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_barang.php"><i class="fa fa-fw fa-box"></i> Data Barang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data_supplier.php"><i class="fa fa-fw fa-car"></i> Data Supplier</a>
                </li>
            </ul>
            <a class="btn btn-danger btn-sm my-2 my-sm-0" href="logout.php"><i class="fas fa-fw fa-sign-out-alt"></i>
                Logout</a>
        </div>
    </nav>
</body>
</html>