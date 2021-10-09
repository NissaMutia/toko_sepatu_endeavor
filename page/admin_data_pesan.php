<?php
  include '../fungsi/session.php';
  include '../fungsi/navbar.php';
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/background.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<title>Endeavor Shoes Store</title>
</head>
<body id="bg">

	<?php navbar_atas('../'); 

	$sql="SELECT data_pesan.id_pesanan,data_pesan.nama,data_pesan.alamat,data_pesan.kelurahan,data_pesan.kecamatan,data_pesan.kotkab,data_pesan.provinsi,data_pesan.kodepos,stok.tipe,stok.harga,data_pesan.byk_beli,stok.gambar,data_pesan.tanggal,data_pesan.ukuran,data_pesan.total,user.username FROM user,stok,data_pesan WHERE user.username=data_pesan.username AND data_pesan.id_barang=stok.id_barang";
		$res=mysqli_query($koneksi,$sql);
		$baris=mysqli_fetch_array($res);
	?>
	<br>
	<div class="row flex-xl-nowrap" style="margin-left: 5px;">
	<div class="col-12 col-md-3 col-xl-2 bd-sidebar">		
		<div class="list-group toogle">
			<a href="admin_barang.php" class="list-group-item list-group-item-action">Barang</a>
			<a href="admin_ukuran.php" class="list-group-item list-group-item-action">Stok Ukuran</a>
			<a href="admin_data_pesan.php" class="list-group-item list-group-item-action text-white bg-danger active-danger">Data Pesanan</a>
		</div>
	</div>
	
	<div class="col-12 col-md-10 col-xl-9 py-md-3 pl-md-5 bd-content" style="background-color: white;">
		<form class="input-group md-form form-sm form-2 pl-0" action="..fungsi/search_adm_datpes.php" method="POST">
			<input class="form-control my-0 py-1" name="cari" type="text" placeholder="Search Username" aria-label="Search" hidden>
			<div class="input-group-append">
					<input type="submit" name="input" value="search" width="20px"hidden>
			</form>
		</div>

		<?php 
	while ($baris=mysqli_fetch_array($res)) {?>
		<br>
	<div class="row bg-dark col-md-12">	
			<div class="col-2 img-fluid">
				<br>
				<img src="../img/<?php echo $baris['gambar'];?>" width="175px">
			</div>
			<div class="col-md-8 text-white"id="baris" align="left">
				<br>
				<h4><?php echo $baris['tipe'];?></h4>
				<p>UKURAN : <?php echo $baris['ukuran'];?></p>
				<p>Total : <?php echo $baris['total'];?></p>
				<p>Username : <?php echo $baris['username'];?></p>
			</div>	
			
			<div class="col"id="baris">
				<a href="../fungsi/delete_checkout.php?id=<?php echo $baris['id_pesanan'];?>">
					<button class="btn btn-outline-danger" style="margin-top: 10px;">
						<img src="../img/cross.png" width="50px"></button>
				</a>
			</div>
	</div>
	
	<?php } ?>
		
	</div>
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