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
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/background.css">
	<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> -->
 	<link rel="stylesheet" type="text/css" href="../css/sb-admin-2.css">
	
	<title>Endeavor Shoes Store</title>
</head>
<body id="bg">
<?php
	navbar_atas("../");
?>
	<div class="container" align="center" style="margin-top: 50px;">
		<img class="img-fluid" src="../img/jempol.png" width="300">
		<h2 class="text-fluid text-white"><b style="background-color:#905202;">Silahkan cek riwayat pembelian anda</b></h2>
		<br>
		<a href="../page/keranjang.php">
			<button class="btn btn-danger"><h5>Riwayat Pembelian</h5></button>
		</a>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
