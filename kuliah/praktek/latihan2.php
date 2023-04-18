<?php
require 'function.php';
// Tampung ke variabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
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
  <style>
    * {
      text-align: center;
    }

    .tb-judul {
      background-color: gainsboro;
    }

    td {
      padding: 1rem;
    }

    img {
      height: 100px;
    }
  </style>
  <h1>Daftar Mahasiswa</h1>

  <table border="1" cellpadding="0" cellspacing="0">
    <tr class="tb-judul">
      <td>No.</td>
      <td>NIM</td>
      <td>Nama Mahasiswa</td>
      <td>Foto</td>
      <td>Kelas</td>
      <td>Semester</td>
      <td>E-mail</td>
      <td>Edit</td>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['nama_mhs'] ?></td>
        <td><img src="img/<?= $m['foto_mhs']; ?>" alt="agus"></td>
        <td><?= $m['jurusan'] ?></td>
        <td><?= $m['semester'] ?></td>
        <td><?= $m['email'] ?></td>
        <td><a href="">Update</a> | <a href="">Delete</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>