<?php
include('koneksi.php');
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Laporan Data Karyawan</title>
<style>
*{font-family:Trebuchet MS;}
table{
    border-collapse:collapse;
    width:85%;
    margin:20px auto;
}
th,td{
    border:1px solid #ddd;
    padding:10px;
}
th{
    background:salmon;
    color:white;
}
</style>
</head>
<body>

<h2 align="center">LAPORAN DATA KARYAWAN</h2>

<table>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jabatan</th>
<th>Alamat</th>
<th>Gaji</th>
</tr>

<?php
$no=1;
$query=mysqli_query($koneksi,"SELECT * FROM tbl_karyawan_nurhidayah");

while($row=mysqli_fetch_array($query)){
?>

<tr>
<td><?= $no++; ?></td>
<td><?= $row['nama_karyawan']; ?></td>
<td><?= $row['jabatan']; ?></td>
<td><?= $row['alamat']; ?></td>
<td>Rp <?= number_format($row['gaji'],0,',','.'); ?></td>
</tr>

<?php } ?>
</table>

<br>
<center>
<button onclick="window.print()">Cetak Laporan</button>
</center>

</body>
</html>