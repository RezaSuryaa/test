<?php

require "koneksi.php";

$id_transaksi = $_POST['id_transaksi'];
$tanggal = $_POST['tanggal'];
$harga = $_POST['harga_sekarang'];
$jumlah = $_POST['jumlah'];
$total_pembayaran = $_POST['total_pembayaran'];

$sql = "INSERT INTO tb_transaksi VALUES ('', '$tanggal', '$harga', '$jumlah', '$total_pembayaran')";

mysqli_query($conn, $sql);

?>