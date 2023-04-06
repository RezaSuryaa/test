<?php
require "koneksi.php";

$tanggal = $_POST['tanggal'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_buku = $_POST['id_buku'];
$jumlah = $_POST['jumlah'];

$sql = "SELECT harga from tb_buku WHERE id_buku = '$id_buku'";
$query = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($query)):
    $harga = $row['harga'];
    $total_pembayaran = $_POST['jumlah'] * $row['harga'];

    $sql = "INSERT INTO tb_transaksi VALUES ('', '$tanggal', '$id_pelanggan', '$id_buku', '$harga', '$jumlah', '$total_pembayaran')";
    mysqli_query($conn, $sql);

endwhile;

header("location:data_transaksi.php");

?>