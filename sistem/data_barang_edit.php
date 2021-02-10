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
                <h4>Edit Barang</h4>
            </div>
            <div class="card-body">
                <?php
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id = '$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <form action="data_barang_edit_proses.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" class="form-control" value="<?=$d['id'];?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" value="<?=$d['kode_barang'];?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="<?=$d['nama_barang'];?>">
                    </div>
                    <div class="form-group">
                        <label for="stok">Jumlah</label>
                        <input type="text" name="stok" class="form-control" value="<?=$d['stok'];?>">
                    </div>
                    <?php } ?>
                    <div class="form-group">
                    <label for="kode_supplier">Kode Supplier</label>
                    <select id="kode_supplier" class="form-control" name="kode_supplier">
                        <option disabled selected>Kode</option>
                        <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_supplier");
                        while($data = mysqli_fetch_array($sql)) {
                        ?>
                        <option value="<?php echo $data['kode_supplier'];?>"><?php echo $data['kode_supplier'];?></option>
                        <?php } ?>
                    </select>
                </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">
                            <i class="fa fa-fw fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</body>
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
</html>