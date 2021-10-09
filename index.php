
<?php
	error_reporting(0);
  include 'fungsi/session.php';
  include 'fungsi/navbar.php';
  $ro=0;
		$sql="SELECT stok.id_barang,stok.harga,stok.tipe,stok.gambar,stok_desc.desc_pdk FROM stok,stok_desc WHERE stok.id_barang=stok_desc.id_barang";
		$hasil=mysqli_query($koneksi,$sql);
		$baris=mysqli_fetch_array($hasil);
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/index_style.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>Endeavor Shoes Store</title>
</head>
<body style="background-image: url(img/pattern.jpg);">

<?php navbar_atas(''); ?>
	<br>
	<div class="container-fluid col-xl-10" style="background-color: #FFF8DC;">
		<div class="row">

		<?php 
			while($baris=mysqli_fetch_array($hasil)){ ?>
				
					<a id="card" class="col-md-3 btn btn-outline" style="" href="page/produk.php?id=<?php echo $baris['id_barang'];?>">
						<img class="img-fluid" src="img/<?php echo $baris['gambar'];?>" width="200px">
						<h5 align="center" class="text-dark"><?php echo $baris['tipe']?></h5>
						<p align="center" class="text-dark"><?php echo $baris['desc_pdk']?></p>
						<h5 align="center" class="text-dark">Rp.<?php echo $baris['harga']?></h5>
					</a>
		<?php	
		}
		?>
		</div>
	</div>	
		
	<!-- <div class="container-fluid col-md-10" align="center" id="marginin" style="background-color: white;"> -->
	<!-- <table align="center" style="margin-top: 15px;"> -->
	<!-- <table>
		<tbody align="center">
	<?php
		$ro=0;
		$sql="SELECT stok.id_barang,stok.gambar,stok.tipe,stok.harga,stok.desc_pdk FROM stok,stok_ukuran WHERE stok.id_barang=stok_ukuran.id_barang AND stok_ukuran.total!=0 AND stok_ukuran.ukuran=0";
		$hasil=mysqli_query($koneksi,$sql);
		while($baris=mysqli_fetch_array($hasil)){
		if ($ro==0) { ?>
			<div class="row">
		<?php
		}
		?>		
			<button class="btn btn-outline-info" id="wraping">
				<div class="col">
				<a href="page/produk.php?id=<?php echo $baris['id_barang'];?>" style="text-decoration: none;">
				<img class="img-fluid" src="img/<?php echo $baris['gambar'];?>" width="200px">
				<h5 align="center" class="text-dark"><?php echo $baris['tipe']?></h5>
				<p align="center" class="text-dark"><?php echo $baris['desc_pdk']?></p>
				<h5 align="center" class="text-dark">Rp.<?php echo $baris['harga']?></h5>
				</a>
				</div>
			</button>
		
		<?php 
		$ro++;
		if ($ro==4) { 
			$ro=0;
			?>
			</div>
		<?php
		}
		?>		
			
	<?php
		}
	?>
		</tbody>
		</table>
	</div>
 -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>