<?php 

	include "koneksi.php";

	//baca tabel status untuk mode absensi
	$sql = mysqli_query($konek, "select * from status");
	$data = mysqli_fetch_array($sql);
	$mode_absen = $data['mode'];

	//uji mode absen
	$mode ="";
	if($mode_absen==1)
		$mode = "Masuk";
	else if ($mode_absen==2)
		$mode = "Istirahat";
	else if ($mode_absen==3)
		$mode = "Kembali";
	else if ($mode_absen==4)
		$mode = "Pulang";


 ?>



<div class="container-fluid" style="text-align: center;">
	<h3>Absen : <?php echo $mode; ?> </h3>
	<h3>Silahkan Tempelkan Kartu Anda</h3>
	<img src="images/rfid.png" style="width: 200px"><br>
	<img src="images/animasi2.gif">
	
</div>