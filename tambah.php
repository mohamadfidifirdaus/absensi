

<!-- Proses Penyimpanan -- >
	<?php 

		include "koneksi.php";
		echo json_encode($_POST);
		//jika tombol simpan diklik
		if(isset($_POST['btnSimpan']))
		{
			echo "test";
			//baca isi inputan form
			//$nokartu = $_POST['nokartu'];
			//$nama = $_POST['nama'];
			//$alamat = $_POST['alamat'];

			//simpan ke tabel karyawan
			//$simpan = mysqli_query($konek, "insert into karyawan(nokartu, nama, alamat) values ( '$nokartu', '$nama', '$alamat')");

			//jika berhasil tersimpan, tampilkan pesan tersimpan
			//kemabali ke data karyawan

			//if($simpan)
			//{
				echo "

			<script>
			alert('Berhasil');
			</script>
				";
			//}
			//else
			//	{
			//	echo "

			//<script>
			//alert('gagal');
			//location.replace('datakaryawan.php');
			//</script>
			//	";
		//	}
		}
	 ?> 


<!DOCTYPE html>
<html>
<head>
	<?php include "header.php"; ?>
	<title>Tambah Data Karyawan</title>
	<!DOCTYPE html>
<html>
<head>
    <title>Form Pengisian</title>
    
</head>
<body>

	<?php include "menu.php"; ?>

	<!-- isi -->
	<div class="container-fluid">
		<h3>Tambah Data Karyawan</h3>

		<!-- Form input -->
		 <form method="POST">
			<div class="form-group">
				<label>No. Kartu</label><br>
				<input type="text" name="nokartu" id="nokartu" placeholder="No Kartu RFID" class="form-control" style="width: 200px ">
			
			</div>
			<div class="form-group"><br>
				<label>Nama Karyawan</label><br>
				<input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" style="width: 200px ">
	
			</div>
			<div class="form-group"><br>
				<label>Alamat</label><br>
				<textarea class="form-control" name="alamat" id="alamat" placeholder="alamat" style="width: 400px"></textarea>
			
			</div>

			<br>
			<button class="btn btn-primary" name="btnSimpan">Simpan</button>
			
		</form>
		
	</div>

	<?php include "footer.php";  ?>

</body>
</html>