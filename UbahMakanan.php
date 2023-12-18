<?php

include "KoneksiDB.php";

$no_makanan = $_REQUEST['no_makanan'];
$nama_makanan_baru = $_REQUEST['nama_makanan'];
$harga_makanan_baru = $_REQUEST['harga_makanan'];
$deskripsi_makanan_baru = $_REQUEST['deskripsi_makanan'];
$foto_makanan = "";

$ubah = $mysqli->query("UPDATE makanan SET nama_makanan = '$nama_makanan_baru', harga_makanan = '$harga_makanan_baru', deskripsi_makanan = '$deskripsi_makanan_baru' WHERE no_makanan = '$no_makanan'");

if (!$ubah) {
	echo "<script> document.location='FormUbahMakanan.php'; </script>";
} else {
	echo "<script> document.location='index.php'; </script>";
}

?>