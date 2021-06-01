<?php
	include_once('koneksi.php');
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$isi = $_POST['isi'];
	
	$query = "UPDATE `bukutamu` SET `nama`='$nama',
	`email`='$email', `isi`='$isi' where `id_bukutamu`=$id";
	
	$hasil = mysqli_query($koneksi, $query);
	
	if(!$hasil)
		die("Permintaan gagal!!!");
		
	// include_once('bukutamu.php');
	include_once('tampil2.php');
?>