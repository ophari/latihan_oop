<?php
require_once "koneksi.php";
require_once "Crud.php";
$c = new Crud;
$result = $c->tampil_data();

$id = $_GET['id'] ?? NULL;

if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $delete = $c->DeleteRow($id);
 
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

  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Welcome</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="table.php">Table</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><br>

  <?php
  $no = 1;
  ?>
  <div class="container">
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
      foreach ($result as $row) { ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $row['kode_pegawai'] ?></td>
          <td><?= $row['nama'] ?></td>

          <td class="d-flex gap-3">
            <a href="edit.php?id=<?= $row['id']; ?>">
              <button class="btn btn-primary">Edit</button>
            </a>
            <form action="" method="POST">
              <input type="text" name="id" value="<?= $row['id']; ?> " hidden>
              <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
            </form>
            </form>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
  </script>
</body>

</html>