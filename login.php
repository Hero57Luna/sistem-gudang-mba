<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Sistem Informasi Gudang PT. Makmur Berkah Abadi</title>
</head>
<body style="background: #d1e4ed">
    <br><br><br><br>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <center>
        <h1>SISTEM PERGUDANGAN PT. MAKMUR BERKAH ABADI</h1>
    </center>

    <br><br>

    <div class="container">
        <div class="col-md-4 offset-md-4">
            <?php
            if(isset($_GET['pesan'])) {
                if($_GET['pesan'] == 'gagal') {
                    echo "<div class='alert alert-danger'>Username atau Password Anda Salah</div>";
                }
                elseif($_GET['pesan'] == 'logout') {
                    echo "<div class='alert alert-info'>Berhasil Keluar.</div>";
                }
                elseif($_GET['pesan'] == 'belum_login') {
                    echo "<div class='alert alert-warning'>Mohon Login Terlebih Dahulu</div>";
                }
            }
            ?>
            <form action="login_proses.php" method="POST">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="username"><b>Username</b></label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password"><b>Password</b></label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>