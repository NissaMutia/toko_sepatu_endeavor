<?php 
	include 'session.php';
	$tipe=$_REQUEST['tipe'];
	$merk=$_REQUEST['merk'];
	$id=$_REQUEST['id'];
	$desc_pdk=$_REQUEST['desc_pdk'];
	$desc_pjg=$_REQUEST['desc_pjg'];
	$gambar=$_REQUEST['gambar'];

	if ($gambar==NULL) {
		$sql="UPDATE stok SET tipe='$tipe',merk='$merk' WHERE id_barang='$id'";
	}
	else{
		$sql="UPDATE stok SET gambar='$gambar',tipe='$tipe',merk='$merk' WHERE id_barang='$id'";
	}
	$sql1="UPDATE stok_desc SET desc_pjg='$desc_pjg',desc_pdk='$desc_pdk' WHERE id_barang='$id'";
	$res=mysqli_query($koneksi,$sql);
	$res1=mysqli_query($koneksi,$sql1);
	if($res){
		if ($res1) {
			header("location: ../page/admin_barang_edit.php?id=$id&&pesan=show");
		}
		else
			echo "Maaf editannya gagal, silahkan coba lagi loh yaaaaaaaa";
	}
	else
		echo "Maaf editannya gagal, silahkan coba lagi loh yaaaaaaaa";

?>