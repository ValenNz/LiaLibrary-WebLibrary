
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        h3{
            text-align:center;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <?php 
        include "header_admin.php";
        if($_SESSION['role']=='admin'){
    ?>

    <h3>Tampil buku </h3> 
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th> 
                <th>FOTO BUKU</th> 
                <th>NAMA BUKU</th>
                <th>PENGARANG</th>
                <th>DESKRIPSI</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $qry_buku=mysqli_query($conn,"select * from buku");
            $no=0;
            while($data_buku=mysqli_fetch_array($qry_buku)){
            $no++;
            ?>
<tr>              
    <td><?=$no?></td>
    <td><img src="../foto_buku/<?= $data_buku["foto"];?>" width="50px"></td>
    <td><?=$data_buku['nama_buku']?></td> 
    <td><?=$data_buku['pengarang']?></td> 
    <td><?=$data_buku['deskripsi']?></td>
    <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Ubah</a> | <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            } 
        }else {
                echo '<h2 align="center">Anda bukan admin</h2>';
            }
            ?>
        </tbody>
    </table>

 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</tr>
<div class="mt-3">
        <a href="tambah_buku.php" class="btn btn-primary mb-5 ms-2">+ Tambah Buku</a>
    </div>  
</body>
</html>