<?php
	include 'koneksi.php';

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$passmd = md5($password);
	$nama = $_REQUEST['nama'];
	$alamat = $_REQUEST['alamat'];
	$kelurahan = $_REQUEST['kelurahan'];
	$kecamatan = $_REQUEST['kecamatan'];
	$kotkab = $_REQUEST['kotkab'];
	$provinsi = $_REQUEST['provinsi'];
	$kodepos = $_REQUEST['kodepos'];
	$telpon = $_REQUEST['telpon'];
	$email = $_REQUEST['email'];
		
	
	$sql1="INSERT INTO user(username,kode,password)VALUES('$username','1','$passmd')";
	$res1=mysqli_query($koneksi,$sql1);

		if ($res1) {
			
			$sql="INSERT INTO user_bio(username,nama,alamat,kelurahan,kecamatan,kotkab,provinsi,kodepos,telpon,email)VALUES('$username','$nama','$alamat','$kelurahan','$kecamatan','$kotkab','$provinsi','$kodepos','$telpon','$email')";
			$res=mysqli_query($koneksi,$sql);

			if($res)
				header("location:../page/form_login.php");
			else{
				$GagalA="DELETE FROM user WHERE username='$username'";
				$hasil=mysqli_query($koneksi,$GagalA);
				if ($hasil) {
					header("location:../page/form_daftar.php?petunjuk=true");
				}
				else
					echo "ERROR STEP 2, ERROR DELETE STEP 1";		
			}
		}
		else{
			header("location:../page/form_daftar.php?petunjuk=true");

		}


?>