

<!-- Proses Penyimpanan -->
	<?php 

		include "koneksi.php";

		//baca ID data yang akan di edit
		$id = $_GET['id'];

		//baca data karyawan berdasarkan id
		$cari = mysqli_query($konek, "select * from karyawan where id='$id' ");
		$hasil = mysqli_fetch_array($cari);


		//jika tombol simpan diklik
		if(isset($_POST['btnSimpan']))
		{
			//baca isi inputan form
			$nokartu = $_POST['nokartu'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];

			//simpan ke tabel karyawan
			$simpan = mysqli_query($konek, "update karyawan set nokartu='$nokartu', nama='$nama', alamat='$alamat' where id='$id' ");

			//jika berhasil tersimpan, tampilkan pesan tersimpan

			if($simpan)
			{
				echo "

			<script>
			alert('Berhasil');
			location.replace('datakaryawan.php');
			</script>
				";
			}
			else
				{
				echo "

			<script>
			alert('Gagal');
			location.replace('datakaryawan.php');
			</script>
				";
			}
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
				<input type="text" name="nokartu" id="nokartu" placeholder="No Kartu RFID" class="form-control" style="width: 200px" value="<?php echo $hasil['nokartu']; ?>" >
			
			</div>
			<div class="form-group"><br>
				<label>Nama Karyawan</label><br>
				<input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control" style="width: 200px" value="<?php echo $hasil['nama']; ?>">
	
			</div>
			<div class="form-group"><br>
				<label>Alamat</label><br>
				<textarea class="form-control" name="alamat" id="alamat" placeholder="alamat" style="width: 400px">  <?php echo $hasil['alamat']; ?></textarea>
			
			</div>

			<br>
			<button class="btn btn-primary" name="btnSimpan">Simpan</button>
			
		</form>
		
	</div>

	<?php include "footer.php";  ?>

</body>
</html>