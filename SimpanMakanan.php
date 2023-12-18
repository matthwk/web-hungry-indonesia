<?php

include "KoneksiDB.php";

$nama_makanan = $_REQUEST['nama_makanan'];
$harga_makanan = $_REQUEST['harga_makanan'];
$deskripsi_makanan = $_REQUEST['deskripsi_makanan'];
$foto_makanan = "";

$simpan = $mysqli->query("INSERT INTO makanan VALUES ('', '$nama_makanan', '$harga_makanan', '$deskripsi_makanan', '$foto_makanan')");

if (!$simpan) {
	echo "<script> document.location='FormTambahMakanan.php'; </script>";
} else {
	echo "<script> document.location='index.php'; </script>";
}

?>