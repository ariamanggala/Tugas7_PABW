<?php
require 'function.php';

// ambil id dri url
$id = $_GET['id'];

// Query
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Detail Mahasiswa</h1>

  <ul>
    <li><img src="img/<?= $m['foto_mhs']; ?>" width="70"></li>
    <li>NIM : <?= $m['nim']; ?></li>
    <li>Nama : <?= $m['nama_mhs']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li>Semester : <?= $m['semester']; ?></li>
    <li>E-mail : <?= $m['email']; ?></li>
    <li><a href="">Update</a> | <a href="">Delete</a></li>
  </ul>
</body>

</html>