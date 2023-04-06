<?php
include "koneksi.php";

$id_buku = $_GET['id_buku'];
$query = mysqli_query($conn, "SELECT * FROM tb_buku WHERE id_buku='$id_buku'");
while ($row = mysqli_fetch_array($query)):
?>


<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <form action="edit_buku.php" method="POST">
        <input type="hidden" name="id_buku" value="<?= $row['id_buku']?>">
        <label for="nama_buku">Nama Buku</label>
        <input type="text" id="nama_buku" name="nama_buku" value="<?= $row['nama_buku']?>">
        <br>
        <br>
        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis" value="<?= $row['penulis']?>">
        <br>
        <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" value="<?= $row['penerbit']?>">
        <br>
        <br>
        <label for="harga">Harga</label>
        <input type="number" id="harga" name="harga" value= "<?= $row['harga']?>">
        <br>
        <br>
        <input type="submit" value="Ubah">
    </form>
</body>

</html>
<?php endwhile; ?> 