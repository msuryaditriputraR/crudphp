<?php

require_once("../connect.php");

if (isset($_POST)) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $nisn = $_POST['nisn'];
  $tgl_lahir = $_POST['tgl_lahir'];

  $sql = "UPDATE siswa SET nama='$nama', nisn='$nisn', tgl_lahir='$tgl_lahir' WHERE id=$id";

  mysqli_query($connect, $sql);

  header("Location: http://localhost/crudphp/");
}
