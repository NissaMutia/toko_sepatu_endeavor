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
			<a href="admin_barang.php" class="list-group-item list-group-item-action">Barang</a>
			<a href="admin_ukuran.php" class="list-group-item list-group-item-action text-white bg-danger active-danger">Stok Ukuran</a>
			<a href="admin_data_pesan.php" class="list-group-item list-group-item-action">Data Pesanan</a>
		</div>
	</div>
	
	<div class="col-12 col-md-10 col-xl-9 py-md-3 pl-md-5 bd-content" style="background-color: #FFF8DC;">
		

	<?php while ($baris=mysqli_fetch_array($res)) {?>
		<br>
	<b><h4 align="center">-<?php echo $baris['tipe'];?>-</h4></b>	
	<div class="row well">
		<form class="form-group col" action="../page/admin_ukuran_edit.php?id=<?php echo $baris['id_barang'];?>" method="POST">

			<img class="col-md-2"src="../img/<?php echo $baris['gambar'];?>" width="150px">
			<div class="btn-group btn-group-toggle col-md-6" data-toggle="buttons">
	
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="36" autocomplete="off" checked><h5>36</h5>
				</label>
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="37" autocomplete="off" checked><h5>37</h5>
				</label>				
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="38" autocomplete="off" checked><h5>38</h5>
				</label>				
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="39" autocomplete="off" checked><h5>39</h5>
				</label>				
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="40" autocomplete="off" checked><h5>40</h5>
				</label>				
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="41" autocomplete="off" checked><h5>41</h5>
				</label>				
				<label class="btn btn-secondary">
					<input type="radio" name="options" value="42" autocomplete="off" checked><h5>42</h5>
				</label>
				<br>
			</div>
				<input type="submit" class="btn btn-danger col-md-2 md-block" name="login" value="LIHAT STOK">
	</form>
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