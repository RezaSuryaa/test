<?php

require "koneksi.php";

$sql = "SELECT * FROM tb_pelanggan";
$result = mysqli_query ($conn, $sql);
?>



<!DOCTYPE html>
<html>

<head>
    <title>Form Pelanggan</title>
</head>

<body>
    <a href="form_pelanggan.php">Tambah</a>
    <table border="1">      
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id_pelanggan']?></td>
            <td><?= $row['nama_pelanggan']?></td>
            <td><?= $row['alamat']?></td>
            <td><?= $row['email']?></td>
            <td>
                <a href="form_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan']?>">Edit</a>
                <a href="delete_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan']?>">Hapus</a>
            </td>
            <?php endwhile; ?>
        </tr>
    </table>

</body>
</html>