<?php
session_start();

// Cek apakah user sudah login
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

// Ambil username dari session
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Beranda</title>
<style>
body {
    font-family: Trebuchet MS;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 50px auto;
    text-align: center;
}

.menu {
    margin-bottom: 30px;
}

.menu a {
    background-color: salmon;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    margin: 5px;
    display: inline-block;
    border-radius: 5px;
    transition: 0.3s;
}

.menu a:hover {
    background-color: #ff7f50;
}

.welcome-box {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px #ccc;
}

h1 {
    color: salmon;
    margin-bottom: 10px;
}

h3 {
    color: #333;
    margin-top: 0;
}

p {
    color: #666;
}
</style>
</head>
<body>

<div class="container">

    <!-- Menu Navigasi -->
    <div class="menu">
        <a href="home.php">Home</a>
        <a href="pengguna.php">Pengguna</a>
        <a href="jabatan.php">Jabatan</a>
        <a href="karyawan.php">Karyawan</a>
        <a href="laporan.php">Laporan</a>
        <a href="logout.php">Keluar</a>
    </div>

    <!-- Konten Beranda -->
    <div class="welcome-box">
        <h1>Selamat Datang</h1>
        <h3><?php echo htmlspecialchars($username); ?></h3>
        <p>Di Sistem Informasi Data Karyawan</p>
    </div>

</div>

</body>
</html>