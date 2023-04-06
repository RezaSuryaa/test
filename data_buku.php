<?php

require "koneksi.php";

$sql = "SELECT * FROM tb_buku";
$result = mysqli_query ($conn, $sql);
?>


<!DOCTYPE html>

<html>
<head>
    <title>Table Buku</title>
</head>

<body>
    <a href="form_buku.php">Tambah</a>
    <table border="1">
        <tr>
            <th>ID Buku</th>
            <th>Nama Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row= mysqli_fetch_assoc($result)): ?>     
        <tr>
            <td><?= $row['id_buku']?></td>
            <td><?= $row['nama_buku']?></td>
            <td><?= $row['penulis']?></td>
            <td><?= $row['penerbit']?></td>
            <td><?= $row['harga']?></td>
            <td>
                <a href="form_buku.php?id_buku=<?= $row['id_buku']?>">Edit</a>
                <a href="delete_buku.php?id_buku=<?= $row['id_buku']?>">Hapus</a>
            </td>
            <?php endwhile; ?>
        </tr>
    </table>

</body>
</html>