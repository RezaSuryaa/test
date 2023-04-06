<?php
require "koneksi.php";

$tanggal = $_POST['tanggal'];
$id_transaksi = $_POST['id_transaksi'];
$id_pelanggan = $_POST['nama_pelanggan'];
$id_buku = $_POST['nama_buku'];
$jumlah = $_POST['jumlah'];

$sql = "SELECT harga FROM tb_buku WHERE id_buku = '$id_buku'";
$result = mysqli_query($conn, $sql);
echo "<br>";

while ($row = mysqli_fetch_array($result)):
    // var_dump($row);
    echo "<br>";
    $harga = $row['harga'];
    $total_pembayaran = $_POST['jumlah']*$row['harga'];
    // var_dump($total_pembayaran);


    $query = "UPDATE tb_transaksi SET tanggal = '$tanggal', id_pelanggan = '$id_pelanggan', id_buku= '$id_buku', jumlah = '$jumlah', total_pembayaran = '$total_pembayaran' WHERE id_transaksi = '$id_transaksi'";
    // var_dump($query);
    $hasil = mysqli_query($conn, $query);
    if($hasil){
        header ("location:data_transaksi.php");
    }
endwhile;


?>