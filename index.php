<?php
include('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD db_ujianlabor_nurhidayah</title>
<style type="text/css">
* {
    font-family: "Trebuchet MS";
}
h1 {
    text-transform: uppercase;
    color: salmon;
}
table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    width: 85%;
    margin: 10px auto;
}
table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: center;
}
table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
}
.menu {
    width: 85%;
    margin: 20px auto;
    text-align: center;
}
.menu a {
    background-color: salmon;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    margin: 5px;
    display: inline-block;
}
.menu a:hover {
    background-color: #ff7f50;
}
</style>
</head>
<body>

<center><h1>UJIAN LABOR 2026</h1></center>

<div class="menu">
    <a href="home.php">Home</a>
    <a href="pengguna.php">Pengguna</a>
    <a href="jabatan.php">Jabatan</a>
    <a href="karyawan.php">Karyawan</a>
    <a href="laporan.php">Laporan</a>
    <a href="logout.php">Keluar</a>
    <a href="login.php">login</a>
     <a href="transaksi.php">transaksi</a>
</div>

<center><a href="tambah_karyawan.php">+ Tambah Karyawan</a></center>

<!-- <table>
<thead>
<tr>
<th>home</th>
<th>Karyawan</th>
<th>Jabatan</th>
<th>pengguna</th>
<th>laporan</th>
<th>transaksi</th>
<th>keluar</th>
</tr>
</thead>
<tbody> -->

<?php
$query = "SELECT * FROM tbl_karyawan_nurhidayah ORDER BY Id_karyawan ASC";
$result = mysqli_query($koneksi, $query);

if(!$result){
    die ("Query Error: ".mysqli_errno($koneksi).
    " - ".mysqli_error($koneksi));
}

$no = 1;

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $no; ?></td>
<td><?php echo $row['nama_karyawan']; ?></td>
<td><?php echo $row['jabatan']; ?></td>
<td><?php echo substr($row['alamat'],0,30); ?>...</td>
<td>Rp <?php echo number_format($row['gaji'],0,',','.'); ?></td>
<td style="text-align:center;">
    <img src="foto/<?php echo $row['foto']; ?>" width="100">
</td>
<td>
    <a href="edit_karyawan.php?id=<?php echo $row['id_karyawan']; ?>">Edit</a> |
    <a href="hapus_karyawan.php?id=<?php echo $row['id_karyawan']; ?>" 
    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
</td>
</tr>

<?php
$no++;
}
?>

</tbody>
</table>

</body>
</html>