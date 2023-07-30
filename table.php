<?php
  require_once "koneksi.php";
  require_once "Crud.php";
  $c = new Crud;
  $result = $c->tampil_data();

  $id =$_GET['id'] ?? NULL;
  if(isset($_POST['delete'])){
    $id =$_POST['id'];
    $delete = $c->DeleteRow($id);
    header("location: table.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<?php
  $no = 1;
?>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">kode pegawai</th>
      <th scope="col">nama</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($result as $row) { ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?=$row['kode_pegawai']?></td>
      <td><?=$row['nama']?></td>
      
      <td>
      <form action="" method="POST">
      <button>edit</button>
      <input type="text" name="id" value="<?=$row['id'];?>" hidden>
      <button type="submit" name="delete">hapus</button>
    </form>
      </form>
     </td>
  </tr>
<?php }?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
