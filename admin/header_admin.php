<?php 
session_start();
    if($_SESSION['status_login_admin']!=true){
        header('location: login_admin.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px; background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PERPUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" style="text-align:right; text-align: center;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home_admin.php">Home</a>
            </li>
            <?php
            if($_SESSION['role']=='admin'){
            ?>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="buku_admin.php">Buku</a>
            </li>
            <?php
            }
            if($_SESSION['role']=='petugas'){
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_peminjaman_admin.php">Transaksi</a>
            </li>
            <?php
            }
            ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_kelas.php">Daftar Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout_admin.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">