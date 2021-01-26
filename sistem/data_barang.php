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
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                            Data berhasil diubah.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>';
                } else if ($_GET['pesan'] == 'hapus') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data berhasil dihapus!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                }
            }
            ?>
            <a href="data_barang_tambah.php" class="btn btn-primary btn-sm float-left">
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
                            <th width="10%">Kode Barang</th>
                            <th width="30%">Nama Barang</th>
                            <th width="10%">Jumlah</th>
                            <th width="10%">Kode Supplier</th>
                            <th width="15%">Aksi</th>
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
                            <td><?= $d['stok']; ?></td>
                            <td><?= $d['kode_supplier']; ?></td>
                            <td>
                            <a href="data_barang_edit.php?id=<?= $d['id'];?>" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-pencil-alt"></i> Edit</a>
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-trash-alt"></i>Hapus</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                    <div class="modal-body">Yakin ingin menghapus?
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                <a href="data_barang_hapus.php?id=<?= $d['id'];?>"><button type="button" class="btn btn-danger">Ya</button></a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>