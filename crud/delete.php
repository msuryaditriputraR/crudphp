<?php

require_once("../connect.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "DELETE FROM siswa WHERE id=$id";

  mysqli_query($connect, $sql);

  header("Location: http://localhost/crudphp/");
}
