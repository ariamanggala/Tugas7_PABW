<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'tugas7_pabw');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nim = htmlspecialchars($data['nim']);
  $nama_mhs = htmlspecialchars($data['nama_mhs']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $semester = htmlspecialchars($data['semester']);
  $foto_mhs = htmlspecialchars($data['foto_mhs']);
  $email = htmlspecialchars($data['email']);

  $query = "INSERT INTO 
          mahasiswa
          valueS 
          (null, '$nim', '$nama_mhs', '$jurusan', '$semester', '$foto_mhs', '$email');
          ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}