<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <form action="insert_buku.php" method="POST">
        <input type="hidden" name="id_buku">
        <label for="nama_buku">Nama Buku</label>
        <input type="text" id="nama_buku" name="nama_buku">
        <br>
        <br>
        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis">
        <br>
        <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit">
        <br>
        <br>
        <label for="harga">Harga</label>
        <input type="number" id="harga" name="harga">
        <br>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>