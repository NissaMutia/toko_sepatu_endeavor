<?php
	error_reporting(0);
	include'../fungsi/koneksi.php';
	include'../fungsi/navbar.php';
	$pesan=$_REQUEST['pesan'];
	$isi=$_REQUEST['isi'];
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
		<a class="navbar-brand text-white" href="../index.php">
			<b>ENDEAVOR</b>
		</a>
	</div>
		
	</nav>
	<?php if ($pesan=='true') {
		?>
		<div class="alert alert-warning" role="alert">
			<?php echo $isi; ?>
		</div> 
	<?php
	} ?>

 	<div class="col-md-4 col-md-offset-4" id="form_login" style="background-color: #FFF8DC;">
 		<h1 class="text-center"><img src="../img/endeavor.jpg" width="200px" align="center"></h1>
 		<br>
 		<form class="form-group" action="..\fungsi\login.php" method="POST">
 			<input type="text" class="form-control" name="username" placeholder="Username" required><br>
 			<input type="password" class="form-control" name="password" placeholder="Password" required><br>
 			<input type="submit" class="btn btn-danger btn-md btn-block" name="login" value="Login">
 		</form>
 		belum punya akun ? <a href="form_daftar.php?petunjuk=false">daftar disini</a>
 		<br>
 		<br>
 		<br>

 	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>