<?php 
	error_reporting(0);
	include '../fungsi/session.php';
	include '../fungsi/navbar.php';
	if ($_SESSION['username']==NULL) {
		header("location:form_login.php");
	}
	else{
	if (isset($_POST['beli'])) {
		$byk_beli=$_REQUEST['byk_brg'];
		$id=$_REQUEST['id'];
		$pembeli=$_SESSION['username'];
		$ukuran=$_REQUEST['ukuran'];

		$sql1="SELECT stok.id_barang,stok.merk,stok.tipe,stok.harga,stok.gambar,stok_desc.desc_pjg,stok_desc.desc_pdk FROM stok,stok_desc WHERE stok.id_barang=stok_desc.id_barang AND stok.id_barang='$id'";
		$sql2="SELECT * FROM user_bio WHERE username='$pembeli'";
		$sql3="SELECT * FROM stok_ukuran WHERE id_barang='$id' AND ukuran='$ukuran'";
		$res1=mysqli_query($koneksi,$sql1);
		$res2=mysqli_query($koneksi,$sql2);
		$res3=mysqli_query($koneksi,$sql3);
		$rostok=mysqli_fetch_array($res1);
		$roser=mysqli_fetch_array($res2);
		$rostokur=mysqli_fetch_array($res3);
	}
}
 ?>