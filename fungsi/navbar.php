

<?php 

	function navbar_atas($path)
	{
		echo '<nav class="navbar navbar-light bg-danger">
		<div class="container col-md-2"><a class="navbar-brand" href="'.$path.'index.php">
			<img class="img-fluid" src="'.$path.'img/endeavor.jpg" height="75px" width="75px">
			<b class="text-white">ENDEAVOR</b>
		</a>
	</div>'; 
		if($_SESSION['username']==NULL) {
		echo '<div class="container col-md-8"></div>
		<div class="container col-md-2">
			<h4 class="text-white" align="right">Masuk/registrasi<br>di <a class="text-warning" href="'.$path.'page/form_login.php?ulang='.'ulang'.'">sini!</a></h4>
		</div>';
		} else { echo '
			<div class="container col-md-2">';
			
			if ($_SESSION['kode']==0) {
				echo '<p class="text-white">terdaftar sebagai '.$_SESSION['nama'].'</p> <a href="'.$path.'page/admin_barang.php"> <button class="btn btn-dark">Pengaturan Barang</button></a>';
			}
			else{
				echo '<h3 class="text-white" align="center">Halo<br>'.$_SESSION['nama'].'!</h3>';
			}
			echo '</div>
			<div class="container col-md-2">
			<a href="'.$path.'page/keranjang.php"><img class="img-fluid"src="'.$path.'img/cart.png" width="75px"></a>
			<a href="'.$path.'fungsi/logout.php"><button class="btn btn-outline-light">Logout</button></a>
		</div>';}
		echo '</nav>';
	}

 ?>