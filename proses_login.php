<?php
include('koneksi.php'); // koneksi ke database

$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk cek data di tabel tbl_user_namamhs
$query = "SELECT * FROM tbl_user_nurhidayah WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    // Login berhasil
    echo "<script>
            alert('Login Berhasil!');
            window.location='home.php';
          </script>";
} else {
    // Login gagal
    echo "<script>
            alert('Email dan Password Salah!');
            window.location='index.php';
          </script>";
}
?>