<?php 
	include '../fungsi/checkout.php';
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
	<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">	
	 --><title>Endeavor Shoes Store</title>
</head>
<body id="bg">
<?php
	navbar_atas("../");
	?>
	<br>
	<div class="container-fluid text-fluid text-white" id="judul"style="background-color:#905202;">
		<h4 align="center"><b>KERANJANG BELANJAMU</b></h4>		
	</div>
	<?php 
	while ($baris=mysqli_fetch_array($res)) {?>
		<br>
	<div class="row col-md-12">	
		<div class="col-md-2"></div>
		<div class="col-md-8 btn-group btn-dark btnaja">
			<div class="col-md-2 img-fluid"id="baris">
				<img src="../img/<?php echo $baris['gambar'];?>" width="200px">
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-6 col-md-offset-1"id="baris" align="left">
				<h3><?php echo $baris['tipe'];?></h3>
				<h3>UKURAN : <?php echo $baris['ukuran'];?></h3>
				<h3>Rp.<?php echo $baris['harga'],' * ',$baris['byk_beli'],' barang';?></h3>
				<h3>Total : <?php echo $baris['harga']*$baris['byk_beli']?></h3>
				<h3>Atas Nama : <?php echo $baris['nama'];?></h3>
			</div>	
			<div class="col-md-1"id="baris">
				<a class="afungsi" href="../fungsi/delete_checkout.php?id=<?php echo $baris['id_pesanan'];?>">
					<button class="btn btn-outline-danger" style="margin-top: 10px;">
						<img src="../img/cross.png" width="50px"></button>
				</a>
			</div>
			<br>
		</div>
		</div>
	
	<?php } ?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
