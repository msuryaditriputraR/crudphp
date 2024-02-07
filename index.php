<?php require_once('./crud/read.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
</head>

<body>
  <center>
    <h1>DATA SISWA TKJ 3</h1>

    <a href="./tambah.php">Tambah Data</a>

    <table border="1" cellspacing="0" cellpadding="5">
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NISN</th>
        <th>TANGGAL LAHIR</th>
        <th>AKSI</th>
      </tr>

      <?php $no = 1; ?>
      <?php foreach ($siswa as $s) :  ?>
        <tr>
          <td><?= $no++  ?></td>
          <td><?= $s['nama']  ?></td>
          <td><?= $s['nisn']  ?></td>
          <td><?= $s['tgl_lahir']  ?></td>
          <td>
            <a href="./edit.php?id=<?= $s['id'] ?>">Edit</a>
            <a href="./crud/delete.php?id=<?= $s['id'] ?>" onclick="return confirm('Apa kamu yakin?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </center>
</body>

</html>