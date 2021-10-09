<?php
	include 'koneksi.php';
	if (isset($_POST['login'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$passmd = md5($password);
		$sql="SELECT * FROM user WHERE username='$username'";
		$sql1="SELECT * FROM user_bio WHERE username='$username'";
		$res=mysqli_query($koneksi,$sql);
		$res1=mysqli_query($koneksi,$sql1);
		$row1=mysqli_fetch_array($res1);
		$row=mysqli_fetch_array($res);
		if($row['password']==$passmd){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['nama']=$row1['nama'];
			$_SESSION['alamat']=$row1['alamat'];
			$_SESSION['kelurahan']=$row1['kelurahan'];
			$_SESSION['kecamatan']=$row1['kecamatan'];
			$_SESSION['kotkab']=$row1['kotkab'];
			$_SESSION['provinsi']=$row1['provinsi'];
			$_SESSION['kodepos']=$row1['kodepos'];
			$_SESSION['telpon']=$row1['telpon'];
			$_SESSION['email']=$row1['email'];
			$_SESSION['kode']=$row['kode'];

			if ($row['kode']==0) {
				header("location:../page/admin_barang.php");
			}
			else
			header("location: ../index.php");
		}
		else{
			header("location: ../page/form_login.php?pesan=true&&isi=Username/password yang anda masukkan salah. Silahkan coba lagi.");
		}
	}

?>