<?php
require_once "koneksi.php";
require_once "Crud.php";

$crud = new Crud();

if (isset($_POST['submit'])) {
    $crud->edit();
    // header("location: table.php");
}

$idToEdit = $_GET["id"];
$pegawai = $crud->getUserById($idToEdit);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ini adalah halaman edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="table.php">table</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    
<div class="container">    
    <form action="" method="post">
        <div>
            <label for="kode ">Kode Pegawai</label><br>
            <input type="text" name="kode" id="kode pegawai" placeholder="kode" required
                value="<?php echo $pegawai['kode_pegawai']; ?>">
        </div>
        <br>
        <div>
            <label for=" nama">Nama</label><br>
            <input type="text" name="nama" placeholder="Nama" required value="<?php echo $pegawai['nama']; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $idToEdit; ?>"><br>
        <button type=" submit" name="submit" class="btn btn-success">kirim</button>
    </form>
    </div>

</body>

</html>