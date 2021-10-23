<?php
$koneksi = mysqli_connect("localhost","root","","presens_karyawan");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>