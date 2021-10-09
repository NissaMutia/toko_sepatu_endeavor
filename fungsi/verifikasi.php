<?php
	include 'session.php';

	$id=$_REQUEST['id'];
	$username=$_SESSION['username'];
	$byk_brg=$_REQUEST['byk_brg'];
	$nama=$_REQUEST['nama'];
	$alamat=$_REQUEST['alamat'];
	$kelurahan=$_REQUEST['kelurahan'];
	$kecamatan=$_REQUEST['kecamatan'];
	$kotkab=$_REQUEST['kotkab'];
	$provinsi=$_REQUEST['provinsi'];
	$kodepos=$_REQUEST['kodepos'];
	$telpon=$_REQUEST['telpon'];
	$ukuran=$_REQUEST['ukuran'];
	$tgl=date('Y-m-d');

	$sementara="SELECT harga from stok WHERE id_barang='$id'";
	$resnya=mysqli_query($koneksi,$sementara);
	$rownya=mysqli_fetch_array($resnya);
	$total=$byk_brg*$rownya['harga'];


	$sql="INSERT INTO data_pesan (ukuran, tanggal, username, nama, alamat, kelurahan, kecamatan, kotkab, provinsi, kodepos, id_barang, byk_beli,total) VALUES ('$ukuran','$tgl','$username','$nama','$alamat','$kelurahan','$kecamatan','$kotkab','$provinsi','$kodepos','$id','$byk_brg','$total')";
	$res=mysqli_query($koneksi,$sql);
	if($res) 
	{
		$sql1="SELECT * FROM stok_ukuran WHERE ukuran='$ukuran' AND id_barang='$id'";
		$res1=mysqli_query($koneksi,$sql1);
		$a=mysqli_fetch_array($res1);
		$jumlah=$a['total'];
		$jumlah=$jumlah-1;
		$sql2="UPDATE stok_ukuran SET total='$jumlah' WHERE id_barang='$id' AND ukuran='$ukuran'";
		$res2=mysqli_query($koneksi,$sql2);
 		if($res2)
 			header("location:../page/confirm.php");
 		else
 			echo "gagal";
 	}
 	else{
 		header("location:../page/form_beli.php?ulang=true");
 	} 
	?>