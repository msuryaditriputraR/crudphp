<?php
require_once('./crud/get.php');

?>

<h1>Edit Data Siswa</h1>

<form action="./crud/update.php" method="post">
  <input type="hidden" value="<?php echo $siswa['id'] ?>" name="id">
  <input type="text" placeholder="Nama" name="nama" required value="<?php echo $siswa['nama'] ?>">
  <input type="number" placeholder="NISN" name="nisn" required value="<?php echo $siswa['nisn'] ?>">
  <input type="date" name="tgl_lahir" required value="<?php echo $siswa['tgl_lahir'] ?>">
  <button type="submit">Edit</button>
</form>