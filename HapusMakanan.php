<?php

include "KoneksiDB.php";

$no_makanan = $_GET['nomakanan'];

$hapus = $mysqli->query("DELETE FROM makanan WHERE no_makanan = '$no_makanan'");

if (!$hapus) {
	echo "<script> document.location='index.php'; </script>";
} else {
	echo "<script> document.location='index.php'; </script>";
}

?>