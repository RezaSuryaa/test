<?php
require "koneksi.php";

$sql = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.nama_pelanggan, tb_buku.nama_buku, tb_transaksi.tanggal, tb_transaksi.harga, tb_transaksi.jumlah, tb_transaksi.total_pembayaran FROM tb_buku INNER JOIN tb_transaksi ON tb_buku.id_buku = tb_transaksi.id_buku INNER JOIN tb_pelanggan ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head></head>

<body>
    <a href="form_transaksi.php">Tambah</a>
    <table border="1">

        <tr>
            <th>ID Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Nama Buku</th>
            <th>Tanggal</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id_transaksi']?></td>
            <td><?= $row['nama_pelanggan']?></td>
            <td><?= $row['nama_buku']?></td>
            <td><?= $row['tanggal']?></td>
            <td><?= $row['harga']?></td>
            <td><?= $row['jumlah']?></td>
            <td><?= $row['total_pembayaran']?></td>
            <td>
                <a href = "form_transaksi.php?id_transaksi=<?= $row['id_transaksi']?>">Edit</a>
                <a href = "delete_transaksi.php?id_transaksi=<?= $row['id_transaksi']?>">Hapus</a>
            </td>
            <?php endwhile; ?>
        </tr>
    </table>


</body>


</html>