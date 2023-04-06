<?php
require "koneksi.php";

$id_transaksi = $_GET["id_transaksi"] ?? 0;
// $id_buku = isset($_GET['id_buku']) ? $_GET['id_buku']: 0;

if ($id_transaksi > 0) {
    $sql = "SELECT * FROM tb_transaksi WHERE id_transaksi = '$id_transaksi'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_transaksi = $row['id_transaksi'];
        $tanggal = $row['tanggal'];
        $id_pelanggan = $row['id_pelanggan'];
        $id_buku = $row['id_buku'];
        $harga = $row['harga'];
        $jumlah = $row['jumlah'];
        $total_pembayaran = $row['total_pembayaran'];
    endwhile;
    $form_action = 'edit_transaksi.php';
    $title = "Edit Data Transalksi";
}
else {
    $id_transaksi = '';
    $tanggal = '';
    $id_pelanggan = '';
    $id_buku = '';
    $harga = '';
    $jumlah = '';
    $total_pembayaran = '';
    $form_action = 'insert_transaksi.php';
    $title = "Tambah Data Transaksi";
}

$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan FROM tb_pelanggan");
$result_buku = mysqli_query($conn, "SELECT id_buku, nama_buku, harga FROM tb_buku");

$options_pelanggan = mysqli_fetch_all($result_pelanggan, MYSQLI_ASSOC);
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC);

$id_transaksi = $_GET['id_transaksi'];

$sql1 = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.id_pelanggan, tb_buku.id_buku, tb_pelanggan.nama_pelanggan, tb_buku.nama_buku, tb_transaksi.jumlah, tb_transaksi.tanggal, tb_transaksi.harga, tb_transaksi.total_pembayaran FROM tb_pelanggan INNER JOIN tb_transaksi ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan INNER JOIN tb_buku ON tb_buku.id_buku = tb_transaksi.id_buku WHERE tb_transaksi.id_transaksi = '$id_transaksi'";

$result1 = mysqli_query($conn, $sql1);

while ($row = mysqli_fetch_array($result1)):

?>

<!DOCTYPE html>
<html>
<head></head>

<body>

<nav>
    <ul>
        <li><a href="welcome.php">Beranda</a></li>
        <li><a href="data_buku.php">Data Buku</a></li>
        <li><a href="data_pelanggan.php">Data Pelanggan</a></li>
        <li><a href="data_transaksi.php">Data Transaksi</a></li>
    </ul>
</nav>
    <h2 style="margin-bottom:20px"><?=$title; ?></h2>
    <form action="edit_transaksi.php" method="post">
        <input type="hidden" name="id_transaksi" value="<?=$row['id_transaksi']?>"/>

        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" value="<?=$row['tanggal']?>"/>
        <br>
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <select name="nama_pelanggan" id="id_pelanggan"><?=$row['nama_pelanggan']?>
            <?php foreach ($options_pelanggan as $option) {
                $selected = $option['id_pelanggan']==$row['id_pelanggan'] ? 'selected' : '';
            ?>
            <option value="<?=$option['id_pelanggan']?>" <?= $selected ?>><?=$option['nama_pelanggan']?></option>
            <?php } ?>
        </select><br>
        <label for="nama_buku">Nama Buku</label>
        <select name="nama_buku" id="id_buku"><?=$row['nama_buku']?>
            <?php foreach ($options_buku as $option) {
                $selected = $option['id_buku']==$row['id_buku'] ? 'selected' : '';
            ?>
            <option value="<?=$option['id_buku']?>" <?= $selected ?>><?=$option['nama_buku']  . ' - Rp ' .  $option['harga']?></option>
            <?php } ?>
        </select><br>

        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" value="<?=$row['jumlah']?>"></input><br>
        <input type="submit" value="ubah">
        <?php endwhile; ?>
</form>
</body>






</html>