<?php

require_once('./connect.php');

$id = $_GET['id'];

$read = mysqli_query($connect, "SELECT * FROM siswa WHERE id= '$id'");

$siswa = mysqli_fetch_array($read, MYSQLI_ASSOC);
