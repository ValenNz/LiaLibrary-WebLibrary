<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_buku=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_get_buku);
    ?>
    <h3>Ubah Produk</h3>
    <form action="proses_ubah_buku.php" method="post">
        <input type="hidden" name="id_buku" value="<?=$dt_buku['id_buku']?>">
        nama buku :
        <input type="text" name="nama_buku" value="<?=$dt_buku['nama_buku']?>" class="form-control">
        Pengarang :
        <input type="text" name="pengarang" value="<?=$dt_buku['pengarang']?>" class="form-control">
        deskripsi : 
        <input type="text" name="deskripsi" value="<?=$dt_buku['deskripsi']?>" class="form-control">
        Foto Buku : 
        <!-- if else  -->
        
        <img src="" alt="">
        <input type="file" name="foto" class="form-control">
        <input type="submit" name="simpan" value="Ubah buku" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
