<?php 
include 'session.php'; 
$id=$_REQUEST['id'];
$sql="DELETE FROM `stok` WHERE `stok`.`id_barang` = '$id'";
$sql1="DELETE FROM stok_desc WHERE id_barang='$id'";
$sql2="DELETE FROM stok_ukuran WHERE id_barang='$id'";
$res=mysqli_query($koneksi,$sql);
$res1=mysqli_query($koneksi,$sql1);
$res2=mysqli_query($koneksi,$sql2);
if ($res) {
	if ($res1) {
		if ($res2) {
		header("location:../page/admin_barang.php");	
		}else
			echo "GAGA-L tahap 3";
	}
	else
	echo "GAGA-L tahap 2";
	}
else
echo "GAGA-L tahap 1";
?>