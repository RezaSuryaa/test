<?php

require "koneksi.php";
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$sql = "INSERT INTO tb_pelanggan VALUES ('', '$nama_pelanggan', '$alamat', '$email')";

mysqli_query($conn, $sql);

?>