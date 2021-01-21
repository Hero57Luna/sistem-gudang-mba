<?php
include 'header.php';
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h4>Data Barang</h4>
            </div>
            <div class="card-body">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'tambah') {
                    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                        Data berhasil ditambahkan!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                } else if ($_GET['pesan'] == 'edit') {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Data berhasil diubah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                } else if ($_GET['pesan'] == 'hapus') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data berhasil dihapus!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                }
            }
            ?>
            <a href="#" class="btn btn-primary btn-sm float-left">
                <i class="fa fa-fw fa-plus"></i> Tambah
            </a>
            <form action="data_barang.php" method="GET" class="form-inline float-right">
                <input type="text" class="form-control form-control-sm mr-2" name="keyword" id="keyword" placeholder="Cari">
                <button type="submit" class="btn btn-success btn-sm">
                    <i class="fa fa-fw fa-search"></i> Cari
                </button>
            </form>
            <br><br>
            <div class="col-xs-1 text-center">
                <table class="table table-bordered">
                     <thead class="thead-dark">
                        <tr>
                            <th width="5%">Nomor</th>
                            <th width="15%">Kode Barang</th>
                            <th width="25%">Nama Barang</th>
                            <th width="10%">Jumlah</th>
                            <th width="10%">Kode Supplier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_GET['keyword'])) {
                            $keyword = $_GET['keyword'];
                            $data = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE kode_barang LIKE '%" . $keyword . "%' 
                            OR nama_barang LIKE '%" . $keyword . "%' 
                            OR kode_supplier LIKE '%" . $keyword . "%'");
                            if(mysqli_num_rows($data)<=0) {
                                echo "<div class='alert alert-danger'>Data yang Anda Cari Tidak Bisa Ditemukan</div>";
                            }
                        }
                        else {
                            $data = mysqli_query($koneksi, "SELECT * FROM data_barang");
                        }
                        $no = 1;
                        while($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['kode_barang']; ?></td>
                            <td><?= $d['nama_barang']; ?></td>
                            <td><?= $d['jumlah']; ?></td>
                            <td><?= $d['kode_supplier']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>