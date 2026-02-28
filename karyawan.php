<?php
include "koneksi.php";

$id = $_GET['tbl_karyawan_nurhidayah'];

$query = mysqli_query($conn,"SELECT k.*, j.gaji_pokok, j.tunjangan_jabatan
FROM tbl_karyawan_nurhidayah k
JOIN tbl_jabatan_nurhidayah j ON k.id_jabatan=j.id_jabatan
WHERE k.Id_karyawan='$id'");

$data = mysqli_fetch_assoc($query);

echo json_encode($data);
?>