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
                <h4>Tambah Data Supplier</h4>
            </div>
            <div class="card-body">
                <form action="data_supplier_tambah_proses.php" method="POST">
                <div class="form-group">
                    <label for="kode_barang">Kode Supplier</label>
                    <input type="text" name="kode_supplier" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Supplier</label>
                    <input type="text" name="nama_supplier" class="form-control">
                </div>
                <div class="form-group">
                    <label for="stok">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-fw fa-plus"></i> Tambah Data
                    </button>
                </div>
                </div>
               
                </form>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(function(){

$(".dropdown-menu li a").click(function(){

  $(".btn:first-child").text($(this).text());
  $(".btn:first-child").val($(this).text());

});

});
</script>
</body>
</html>