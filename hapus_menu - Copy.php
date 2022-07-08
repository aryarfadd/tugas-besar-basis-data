<?php 

include('koneksi.php');

$id_menu = $_GET['id_produk'];

$hapus= mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_menu'");

if($hapus)
	header('location: daftar_menu.php');
else
	echo "Hapus data gagal";

 ?>