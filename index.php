<?php
    require_once "koneksi.php";
    require_once "Crud.php";
    $f = new Crud;
    if(isset($_POST['submit'])){
        $f->tambah();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ini adalah halaman index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="table.php">Table</a>
        </li>
      </ul>
    </div>
  </div>
</nav><br>

<div class="container">
<form action="" method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-10">
      <input type="text" name="kode" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="inputPassword3">
    </div>
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">kirim</button>
<!-- </form>
</div>
    <form action="" method="post">
        <div>
            <label for="kode ">Kode Pegawai</label><br>
            <input type="text" name="kode"  id="kode pegawai" placeholder="kode" required>
        </div>
        <br>
        <div>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" placeholder="Nama" required>
        </div>
        <button type="submit" name="submit">kirim</button>
    </form> -->
</body>
</html>