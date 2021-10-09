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

		$sql="SELECT * FROM stok";
		$res=mysqli_query($koneksi,$sql);
		$baris=mysqli_fetch_array($res);
	?>
	<br>
	<div class="row flex-xl-nowrap" style="margin-left: 5px;">
	<div class="col-12 col-md-3 col-xl-2 bd-sidebar">		
		<div class="list-group toogle">
			<a href="admin_barang.php" class="list-group-item list-group-item-action text-white bg-danger active-danger">Barang</a>
			<a href="admin_ukuran.php" class="list-group-item list-group-item-action">Stok Ukuran</a>
			<a href="admin_data_pesan.php" class="list-group-item list-group-item-action">Data Pesanan</a>
		</div>
	</div>
	
	<div class="col-12 col-md-10 col-xl-9 py-md-3 pl-md-5 bd-content" style="background-color: #FFF8DC;">
		
		<a class="btn btn-danger btn-block" href="admin_barang_edit.php">Tambah Barang</a>

	<?php while ($baris=mysqli_fetch_array($res)) {?>
		<br>
	<div class="row">	
		<a href="admin_barang_edit.php?id=<?php echo $baris['id_barang'];?>" style="text-decoration: none;" class="col btn-group btn-dark">
			<div class="col-md-2 img-fluid"id="baris">
				<img src="../img/<?php echo $baris['gambar'];?>" width="100px">
			</div>
			<div class="col-md-8"id="baris" align="left">
				<h4 style="margin-top: 30px;"><?php echo $baris['tipe'];?></h4>
			</div>
		<!-- 	<div class="col-md-2"id="baris"> -->
				<a class="col-md-2" href="../fungsi/delete_stok.php?id=<?php echo $baris['id_barang'];?>">
					<button class="btn btna" style="margin-top: 10px;">
						<img src="../img/cross.png" width="50px"></button>
				</a>
		</a>	<!-- </div> -->
	</div>
	
	<?php } ?>
		


	</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>