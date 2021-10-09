<?php
	include'../fungsi/koneksi.php';
	$petunjuk=$_REQUEST['petunjuk'];
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/background.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../css/sb-admin-2.css">
	
	<title>Endeavor Shoes Store</title>
</head>
<body id="bg">

	<nav class="navbar navbar-info bg-danger">
		<a href="../index.php"><img src="../img/logo.png" width="200px">
		</a>
	</nav>
	<?php if ($petunjuk=='true') { ?>
		<div class="alert alert-warning" role="alert">
			Username yang anda pilih telah dimiliki orang lain. Silahkan memilih username kembali.
		</div>
	<?php
	}
	?>

 	<div class="col-md-8 col-md-offset-2" id="form_daftar" style="background-color: #FFF8DC;">
		<br>
		<h4 class="text-dark" align="center"><b>PENDAFTARAN PENGGUNA BARU</b></h4>
		<br>
		<form class="form-group" action="..\fungsi\daftar.php" method="POST">
			<label>USERNAME : </label>
 			<input type="text" class="form-control" name="username" placeholder="Username" pattern=".{5,15}" required title="panjang username 5-8 karakter"><br>
 			<label>EMAIL : </label>
 			<input type="text" class="form-control" name="email" placeholder="Email" required><br>
 			<label>PASSWORD : </label>
 			<input type="password" class="form-control" name="password" placeholder="Password" pattern=".{8,}" required title="password minimal 8 karakter"><br>
 			<label>NAMA LENGKAP : </label>
 			<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required><br>
 			<label>ALAMAT : </label>
 			<input type="text" class="form-control" name="alamat" placeholder="Alamat" required><br>
 			<label>KELURAHAN : </label>
 			<input type="text" class="form-control" name="kelurahan" placeholder="Kelurahan" required><br>
 			<label>KECAMATAN : </label>
 			<input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" required><br>
 			<label>KABUPATEN / KOTA : </label>
 			<input type="text" class="form-control" name="kotkab" placeholder="Kota / Kabupaten" required><br>
 			<label>PROVINSI : </label>
 			<input type="text" class="form-control" name="provinsi" placeholder="Provinsi" required><br>
 			<label>KODE POS : </label>
 			<input type="text" class="form-control" name="kodepos" placeholder="Kode Pos" required><br>
 			<label>NOMOR TELEPON : </label>
 			<input type="text" class="form-control" name="telpon" placeholder="Nomor telepon yang dapat dihubungi" required><br>
 			<input align="right" type="submit" class="btn btn-danger btn-md btn-block" name="daftar" value="DAFTAR">
 		</form>
 	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>