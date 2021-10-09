<?php 
	include 'session.php';
	include 'navbar.php';

	$uname=$_SESSION['username'];

	$sql="SELECT data_pesan.id_pesanan,data_pesan.nama,data_pesan.alamat,data_pesan.kelurahan,data_pesan.kecamatan,data_pesan.kotkab,data_pesan.provinsi,data_pesan.kodepos,stok.tipe,stok.harga,data_pesan.byk_beli,stok.gambar,data_pesan.tanggal,data_pesan.ukuran,data_pesan.total FROM user,stok,data_pesan WHERE user.username=data_pesan.username AND data_pesan.id_barang=stok.id_barang AND user.username='$uname'";
	$res=mysqli_query($koneksi,$sql);
	$baris=mysqli_fetch_array($res);
?>
