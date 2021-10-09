<?php 
	include 'session.php';
	$stok_baru=$_REQUEST['stok_baru'];
	$ukuran=$_REQUEST['ukuran'];
	$id=$_REQUEST['id'];
	
	$sql="UPDATE stok_ukuran SET total='$stok_baru' WHERE id_barang='$id' AND ukuran='$ukuran'";
	
	$res=mysqli_query($koneksi,$sql);
	if($res)
		header("location: ../page/admin_ukuran_edit.php?id=$id&&pesan=show&&options=$ukuran");
	else
		echo "Maaf editannya gagal, silahkan coba lagi loh yaaaaaaaa";

?>