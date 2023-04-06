<?php
include "koneksi.php";

$id_pelanggan = $_GET['id_pelanggan'];
$query = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");
while ($row = mysqli_fetch_array($query)):
?>


<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <form action="edit_pelanggan.php" method="POST">
        <input type="hidden" name="id_pelanggan" value="<?= $row['id_pelanggan']?>">
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?= $row['nama_pelanggan']?>">
        <br>
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?= $row['alamat']?>">
        <br>
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $row['email']?>">
        <br>
        <br>
        <input type="submit" value="Ubah">
    </form>
</body>

</html>
<?php endwhile; ?> 