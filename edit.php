<?php 
include('koneksi.php');

$id_menu = $_POST['id_produk'];
$nama_menu = $_POST['nama_produk'];
$jenis_menu = $_POST['jenis_produk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder.$nama_file);
$edit = mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_menu', jenis_produk='$jenis_menu', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_produk='$id_menu' ");

if($edit)
	header('location: daftar_menu.php');
else
	echo "Edit produk Gagal";


 ?>