<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Karyawan</title>
<style>
body {
    font-family: Trebuchet MS;
}
.form-container {
    width: 400px;
    margin: 50px auto;
}
input, textarea {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px 0;
}
button {
    background-color: salmon;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
}
button:hover {
    background-color: #ff7f50;
}
</style>
</head>
<body>

<h2 align="center">Tambah Data Karyawan</h2>

<div class="form-container">
<form method="POST" action="proses_tambah_karyawan.php" enctype="multipart/form-data">

<label>Nama Karyawan</label>
<input type="text" name="nama_karyawan" required>

<label>Jabatan</label>
<input type="text" name="jabatan" required>

<label>Alamat</label>
<textarea name="alamat" required></textarea>

<label>Gaji</label>
<input type="number" name="gaji" required>

<label>Foto</label>
<input type="file" name="foto" required>

<button type="submit">Simpan</button>
<a href="karyawan.php">Kembali</a>

</form>
</div>

</body>
</html>