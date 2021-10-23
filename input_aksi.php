<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_karyawan = $_POST['id_karyawan'];
$password = $_POST['password'];
$kehadiran = $_POST['kehadiran'];

// menginput data ke database
mysqli_query($koneksi,"insert into presensi values('','$id_karyawan','$password','$kehadiran')");

// mengalihkan halaman kembali ke index.php
header("location:presensi.php");

?>