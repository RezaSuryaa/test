<?php
require "koneksi.php";

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$sql = "UPDATE tb_pelanggan SET nama_pelanggan ='$nama_pelanggan', alamat ='$alamat', email ='$email' WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
    alert('Edit Berhasil');
    location.href = 'data_pelanggan.php';
    </script>";
} else {
    echo "<script>
    alert('Edit Gagal');
    location.href = 'data_pelanggan.php';
    </script>";
}

?>