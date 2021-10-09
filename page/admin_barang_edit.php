<?php
	error_reporting(0);
  include '../fungsi/session.php';
  include '../fungsi/navbar.php';
  $id=$_REQUEST['id'];
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

		$sql="SELECT stok.gambar,stok.tipe,stok.harga,stok.merk,stok_desc.desc_pjg,stok_desc.desc_pdk FROM stok,stok_desc WHERE stok.id_barang=stok_desc.id_barang AND stok.id_barang='$id'";
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

		<?php 
		if ($pesan!=NULL) { ?>
		<div class="alert alert-success" role="alert">
			Data berhasil di update!
		</div>

		<?php
		 } ?>

		<?php 
		if ($id==NULL) { ?>
			<form class="form-group" action="../fungsi/tambah_barang.php" method="POST">
		 <?php } 
		else { ?>
			<form class="form-group" action="../fungsi/barang_edit.php" method="POST">
		<?php } ?>
		<div class="row">
			<div class="col-md-3">
			<img src="../img/<?php echo $baris['gambar'];?>" width="200px">
			<br>
			<label>Choose Picture</label>
			<input type="file" class="form-control-file" name="gambar">
			</div>
			<div class="col-md-8">
				<form>
				<div class="col-md-12">
					<div class="row">
						<?php 
						if ($id==NULL) { ?>
							<label>ID Barang : </label>
							 <input class="form-control" type="text" name="id" value="<?php echo $id;?>"  pattern=".{8,8}" required title="ID Barang harus 8 karakter">
						 <?php } 
						 else { ?>
						 	<input class="form-control" type="text" name="id" value="<?php echo $id;?>" hidden>
						 <?php } ?>
						 <br>
						<label>Tipe : </label>
						<input class="form-control" type="text" name="tipe" value="<?php echo $baris['tipe'];?>" required>
					</div>
					<br>
					<div class="row">
						<label>Merk : </label>
						<input class="form-control" type="text" name="merk" value="<?php echo $baris['merk'];?>" required>
					</div>
					<br>
					<div class="row">
						<label>Deskripsi Pendek : </label>
						<input class="form-control" type="text" name="desc_pdk" value="<?php echo $baris['desc_pdk'];?>" required>
					</div>
					<br>
					<div class="row">
						<label>Deskripsi Panjang : </label>
						<input class="form-control" type="text" name="desc_pjg" value="<?php echo $baris['desc_pjg'];?>" required>
					</div>
					<div class="row">
						<label>Harga : </label>
						<p>Rp.</p><input class="form-control" type="text" name="harga" value="<?php echo $baris['harga'];?>" required>
					</div>
					<br>
				</div>
				</form>

				<div class="row-md-12">
					<?php 
					if ($id==NULL) { ?>
						<input class="btn btn-danger md-block" type="submit" name="edit" value="Tambah Barang">
					 <?php } 
					 else{ ?>
					 	<input class="btn btn-danger md-block" type="submit" name="edit" value="Edit Barang">
					 <?php }
					 	?>

					
				
				</div>
			</div>
		</div>
	</form>


	</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>