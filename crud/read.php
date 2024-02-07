<?php

require_once('./connect.php');

$read = mysqli_query($connect, "SELECT * FROM siswa");

$siswa = mysqli_fetch_all($read, MYSQLI_ASSOC);
