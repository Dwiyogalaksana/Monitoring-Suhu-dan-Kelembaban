<?php  
	// Membuat koneksi
	include "koneksi.php";

	// Membaca data dari database tabel sensor
	$sql = mysqli_query($konek,"select * from tb_sensor order by id desc"); // mengurutkan data yang terakhir berada di atas

	// Baca nilai data sensor suhu
	$data = mysqli_fetch_array($sql);
	$kelembaban = $data ["kelembaban"];

	 // uji suhu
	if( $kelembaban == "" ) $kelembaban = 0;

	// cetak uji nilai suhu
	echo $kelembaban;
?>
