<?php
error_reporting(0);
  include '../fungsi/session.php';
  include '../fungsi/navbar.php';
  $id=$_REQUEST['id'];
  $ukuran=$_REQUEST['options'];
  $pesan=$_REQUEST['pesan'];
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

		$sql="SELECT stok_ukuran.ukuran,stok_ukuran.total,stok.gambar FROM stok_ukuran,stok WHERE stok_ukuran.id_barang=stok.id_barang AND stok_ukuran.id_barang='$id' AND stok_ukuran.ukuran='$ukuran'";
		$res=mysqli_query($koneksi,$sql);
		$baris=mysqli_fetch_array($res);
	?>
	<br>
	<div class="row flex-xl-nowrap" style="margin-left: 5px;">
	<div class="col-12 col-md-3 col-xl-2 bd-sidebar">		
		<div class="list-group toogle">
			<a href="admin_barang.php" class="list-group-item list-group-item-action">Barang</a>
			<a href="admin_ukuran.php" class="list-group-item list-group-item-action text-white bg-danger active-danger">Stok Ukuran</a>
			<a href="admin_data_pesan.php" class="list-group-item list-group-item-action">Data Pesanan</a>
		</div>
	</div>
	
	<div class="col-12 col-md-10 col-xl-9 py-md-3 pl-md-5 bd-content" style="background-color: white;">
		
		<?php 
		if ($pesan!=NULL) { ?>
		<div class="alert alert-success" role="alert">
			Data berhasil di update!
		</div>

		<?php
		 } ?>
		
		<div class="row">
			<div class="col-md-3">
			<img src="../img/<?php echo $baris['gambar'];?>" width="200px">
			</div>
			<div class="col-md-8">
				<button class="btn-secondary active">UKURAN : <?php echo $ukuran;?></button>
				<form class="form-group" action="../fungsi/edit_ukuran.php" method="POST">
					<br>
					<b><label>STOK : </label></b>
					<input class="border-danger" type="text" name="stok_baru" value="<?php echo $baris['total'];?>">
					<input type="text" name="id" value="<?php echo $id; ?>" hidden>
					<input type="text" name="ukuran" value="<?php echo $ukuran;?>" hidden>
					<input class="button btn-danger" type="submit" name="edit" value="edit">
				</form>
				<div class="row-md-12">
				
				</div>
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