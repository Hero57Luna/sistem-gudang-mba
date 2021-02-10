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
                <h4>Edit Supplier</h4>
            </div>
            <div class="card-body">
                <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM data_supplier WHERE id = '$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <form action="data_supplier_edit_proses.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" class="form-control" value="<?=$d['id'];?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_supplier">Kode Supplier</label>
                        <input type="text" name="kode_supplier" class="form-control" value="<?=$d['kode_supplier'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" name="nama_supplier" class="form-control" value="<?=$d['nama_supplier'];?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?=$d['alamat'];?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-fw fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>