<?php
error_reporting(0);
include '../fungsi/session.php';
$id=$_REQUEST['id'];
$sql1="SELECT * FROM stok WHERE id_barang='$id'";
$sql="SELECT * FROM stok_desc WHERE id_barang='$id'";
$sql2="SELECT * FROM stok_ukuran WHERE id_barang='$id'";
$hasil=mysqli_query($koneksi,$sql1);
$res1=mysqli_query($koneksi,$sql);
$res=mysqli_query($koneksi,$sql2);

$baris=mysqli_fetch_array($hasil);
$des=mysqli_fetch_array($res1);
$row=mysqli_fetch_array($res);
?>

