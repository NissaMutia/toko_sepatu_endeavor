<?php 
	include 'session.php';
	$tipe=$_REQUEST['tipe'];
	$merk=$_REQUEST['merk'];
	$id=$_REQUEST['id'];
	$desc_pdk=$_REQUEST['desc_pdk'];
	$desc_pjg=$_REQUEST['desc_pjg'];
	$gambar=$_REQUEST['gambar'];
	$harga=$_REQUEST['harga'];

	$sql="INSERT INTO stok(gambar,tipe,merk,id_barang,harga) VALUES ('$gambar','$tipe','$merk','$id','$harga')";
	
	$res=mysqli_query($koneksi,$sql);
	
	if($res){
		$sql2="INSERT INTO stok_desc(id_barang,desc_pdk,desc_pjg)VALUES('$id','$desc_pdk','$desc_pjg')";
		$res2=mysqli_query($koneksi,$sql2);
		if ($res2) {
			$sql_ukuran="INSERT INTO stok_ukuran VALUES('$id','36','0'),('$id','37','0'),('$id','38','0'),('$id','39','0'),('$id','40','0'),('$id','41','0'),('$id','42','0')";
		$hasil=mysqli_query($koneksi,$sql_ukuran);

		if ($hasil) {
			header("location: ../page/admin_barang_edit.php?id=$id&&pesan=show");
			}
		else
		echo "C";	
		}
		else
			echo "B";
	}
	else
		echo "A";

?>