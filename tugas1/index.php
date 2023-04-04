<?php
require "function/koneksi.php";

$data_pegawai = query("SELECT * FROM `pegawai`");

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
    <h2>Daftar Table Pegawai</h2>
    <br>
    <a href="Aksi/tambah.php">Tambah Barang</a>
    <br>
    <br>
    <table border='1'>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>No. HP</th>
            <th>E-mail</th>
            <th>Aksi</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach ($data_pegawai as $row) : ?>
        <tr>
            <td><?= $i?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["nip"]?></td>
            <td><?= $row["no_hp"]?></td>
            <td><?= $row["email"]?></td>
            <td><a href="Aksi/hapus.php?nip=<?= $row["nip"]?>">HAPUS</a> | <a href="Aksi/edit.php?nip=<?= $row["nip"]?>">EDIT</a></td>
        </tr>
         <?php $i++ ?>
         <?php endforeach; ?>
    </table>
</body>
</html>