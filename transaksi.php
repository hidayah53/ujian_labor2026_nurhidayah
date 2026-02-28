<?php
include 'koneksi.php';
$query = mysqli_query($koneksi"
  SELECT 
    t.id_transaksi, 
    p.nama AS nama_pengguna, 
    t.tanggal, 
    t.jumlah
  FROM tbl_transaksi_nurhidayah t
  LEFT JOIN tbl_pengguna p ON t.id_pengguna = p.id_pengguna
  ORDER BY t.id_transaksi DESC"
  )
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Transaksi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include('menu.php'); ?>
<body class="bg-light">
<div class="container mt-5">
  <h3 class="mb-4">Daftar Transaksi</h3>
  <a href="pengguna.php" class="btn btn-secondary mb-3">Kembali ke Pengguna</a>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama Pengguna</th>
        <th>Tanggal</th>
        <th>Jumlah</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      while($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= htmlspecialchars($row['nama_pengguna']); ?></td>
          <td><?= htmlspecialchars($row['tanggal']); ?></td>
          <td><?= htmlspecialchars($row['jumlah']); ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>