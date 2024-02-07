<?php

require_once("../connect.php");

if (isset($_POST)) {
  $nama = $_POST['nama'];
  $nisn = $_POST['nisn'];
  $tgl_lahir = $_POST['tgl_lahir'];

  $sql = "INSERT INTO siswa (nama,nisn,tgl_lahir) VALUES ('$nama', '$nisn', '$tgl_lahir')";

  mysqli_query($connect, $sql);

  header("Location: http://localhost/crudphp/");
}
