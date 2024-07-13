<?php
// include koneksi
include "koneksi.php";
// baca data yang dikirim
$suhu = $_GET['suhu'];
$kelembaban = $_GET['kelembaban'];

// menyimpan data ke tabel database
$menyimpan = mysqli_query($konek, "insert into tb_sensor(suhu, kelembaban) values('$suhu','$kelembaban')");

//ujisimpan
if($menyimpan)
	echo "Berhasil Terkirim";
else 
	echo "Tidal Terkirim";

?>