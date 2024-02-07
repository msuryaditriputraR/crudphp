<h1>Tambah Data Siswa</h1>

<form action="./crud/create.php" method="post">
  <input type="text" placeholder="Nama" name="nama" required>
  <input type="number" placeholder="NISN" name="nisn" required>
  <input type="date" name="tgl_lahir" required>
  <button type="submit">Tambah</button>
</form>