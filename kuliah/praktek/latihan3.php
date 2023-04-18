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

    .wrap-table {
      display: flex;
      justify-content: center;
      margin-top: 2rem;
    }

    td {
      padding: 1rem;
    }

    img {
      height: 100px;
    }
  </style>
  <h1>Daftar Mahasiswa</h1>
  <br>

  <form action="tambah.php">
    <button type="submit">Tambah Data Mahasiswa</button>
  </form>

  <div class="wrap-table">
    <table border="1" cellpadding="0" cellspacing="0">
      <tr class="tb-judul">
        <td>No.</td>
        <td>Nama</td>
        <td>NIM</td>
        <td>Foto</td>
        <td>Edit</td>
      </tr>
      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><?= $m['nama_mhs']; ?></td>
          <td><?= $m['nim']; ?></td>
          <td><img src="img/<?= $m['foto_mhs']; ?>" alt="agus"></td>
          <td><a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>

</body>

</html>