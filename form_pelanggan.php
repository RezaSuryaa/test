<?php
require "koneksi.php";

$id_pelanggan = $_GET["id_pelanggan"] ?? 0;
// $id_buku = isset($_GET['id_buku']) ? $_GET['id_buku']: 0;

if ($id_pelanggan > 0) {
    $sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_pelanggan = $row['id_pelanggan'];
        $nama_pelanggan = $row['nama_pelanggan'];
        $alamat = $row['alamat'];
        $email = $row['email'];
    endwhile;
    $form_action = 'edit_pelanggan.php';
    $title = "Edit Data Pelanggan";
}
else {
    $id_pelanggan = '';
    $nama_pelanggan = '';
    $alamat = '';
    $email = '';
    $form_action = 'insert_pelanggan.php';
    $title = "Tambah Data Pelanggan";
}
?>

<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <form action="<?=$form_action?>" method="POST">
        <input type="hidden" name="id_pelanggan" value="<?=$id_pelanggan?>">
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?=$nama_pelanggan?>">
        <br>
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?=$alamat?>">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?=$email?>">
        <br>
        <br>
        <input type="submit" value="Ubah">
    </form>
</body>

</html>