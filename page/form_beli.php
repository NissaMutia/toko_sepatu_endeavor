<?php 
	include '../fungsi/beli.php'; 
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- Required meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/background.css">
<!-- 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
 	<link rel="stylesheet" type="text/css" href="../css/sb-admin-2.css">
	
	<title>Endeavor Shoes Store</title>
</head>
<body id="bg">
<?php 
navbar_atas("../");
?>
<?php
if ($ulang=='true') {
		?>
		<div class="alert alert-warning" role="alert">
			Input data gagal, silahkan coba lagi.
		</div> 
	<?php
	} ?>
<div style="background-color: #905202;"><h4 class="text-white" align="center" style="margin: 30px;"><b>FORM PEMBELIAN</b></h4>
</div>
<div class="container well well-sm col-md-10 col-md-offset-1" style="background-color: #FFF8DC;">
	<div class="row">
	<div class="col col-md-5 col-md-offset-0" style="background-color: #FFF8DC; margin-top: 10px;" align="center">
 		<img src="../img/<?php echo $rostok['gambar'];?>" width="300px" style="margin-top: 20px;">
 		<br>
 		<h3><?php echo $rostok['tipe'];?></h3>
		<br>
		<form action="..\fungsi\verifikasi.php" method="POST">
			<br>
			
			<div class="form-row col-md-8">
				<div class="col-6">
					<h5>Ukuran :</h5>
				</div>
				<div class="col-6">
					<input type="text" class="form-control" name="ukuran" placeholder="Ukuran Sepatu" value="<?php echo $rostokur['ukuran'];?>" readonly>
					<br>
				</div>
			</span>
			</div>
			<div class="form-row col-md-8">
				<div class="col-6">
					<h5>Jumlah Beli :</h5>
 					<input type="text" class="form-control" name="byk_brg" placeholder="Banyak Barang yang Dibeli" value="<?php echo $byk_beli;?>" readonly>
				<br>
				</div>
				<div class="col-2">
					<h3><br>X</h3>
				</div>
				<div class="col-4">
					<h5>Harga :</h5>
					<h4>Rp.<?php echo $rostok['harga'];?></h4>
				</div>
			</div>
			<div>
			<input type="hidden" class="form-control" name="id" placeholder="Banyak Barang yang Dibeli" value="<?php echo $rostok['id_barang'];?>" required>
 			
 			<h5>Total Harga : </h5>
 			<h3 style="background-color: yellow;">Rp.<?php echo $rostok['harga']*$byk_beli; ?></h3>
 			</div>
 	</div>
<div class="container col col-md-7 col-md-offset-0" style="background-color: #FFF8DC; margin-top: 10px; margin-bottom: 10px;" id="form_beli">
		
			<br>
			<label>NAMA LENGKAP PEMBELI: </label>
 			<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $roser['nama'];?>" required><br>
 			<label>ALAMAT : </label>
 			<input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $roser['alamat'];?>" required><br>
 			<label>KELURAHAN : </label>
 			<input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" value="<?php echo $roser['kelurahan'];?>" required><br>
 			<label>KECAMATAN : </label>
 			<input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo $roser['kecamatan'];?>" required><br>
 			<label>KABUPATEN / KOTA : </label>
 			<input type="text" class="form-control" name="kotkab" placeholder="Kota / Kabupaten" value="<?php echo $roser['kotkab'];?>" required><br>
 			<label>PROVINSI : </label>
 			<input type="text" class="form-control" name="provinsi" placeholder="Provinsi" value="<?php echo $roser['provinsi'];?>" required><br>
 			<label>KODE POS : </label>
 			<input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" value="<?php echo $roser['kodepos'];?>" required><br>
 			<label>NOMOR TELEPON : </label>
 			<input type="text" class="form-control" name="telpon" placeholder="Nomor telepon yang dapat dihubungi" value="<?php echo $roser['telpon'];?>" required><br>
 			<input align="right" type="submit" class="btn btn-danger btn-md btn-block" name="pesan" value="Pesan Sekarang!">
 		</form>
 	</div>
 	</div>
 </div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>