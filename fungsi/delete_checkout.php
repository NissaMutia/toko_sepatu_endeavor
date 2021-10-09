<?php 
include 'session.php'; 
$id=$_REQUEST['id'];
$sql="DELETE FROM `data_pesan` WHERE `data_pesan`.`id_pesanan` = '$id'";
$res=mysqli_query($koneksi,$sql);
if ($res) {
	header("location:../page/keranjang.php");
}
?>