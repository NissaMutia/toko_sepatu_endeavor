<?php 
include '../fungsi/produk_dan_stoknya.php';
include '../fungsi/navbar.php';?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/background.css">

	<title>Endeavor Shoes Store</title>
</head>
<body id="bg">

<?php navbar_atas('../'); ?>	
	<div class="container" align="center" style="margin-top: 30px; background-color: #FFF8DC;">
		<br>
		<div class="row">
			<div class="col">
				<img src="../img/<?php echo $baris['gambar'];?>" width="400px">
			</div>
			<div class="col">
				<h3><?php echo $baris['tipe'];?></h3>
				<br>
				<h4 align="justify"><?php echo $des['desc_pjg'];?></h4>
				<br>

 			<h3 align="left" style="background-color: yellow;"> HARGA : Rp.<?php echo $baris['harga']; ?></h3>
				<br>
				<br>
				<form class="form-group" action="..\page\form_beli.php?id=<?php echo $baris['id_barang'];?>" method="POST">
					<select class="form-control" name="ukuran">
						<option>Pilih Ukuran Sepatu</option>
						<?php 
						while ($row=mysqli_fetch_array($res)) { ?>
							<option><?php echo $row['ukuran']; ?></option>
						<?php } ?>
					</select>
					<br>
					<input type="text" class="form-control" name="byk_brg" placeholder="Jumlah yang dibeli" required>
					<br>
					<input type="submit" class="btn btn-primary btn-md btn-block" name="beli" value="BELI SEKARANG !">
				</form>
			</div>
		</div>
		<br>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>