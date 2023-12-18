<?php

$nama_server = "localhost";
$user_server = "root";
$password_user_server = "";
$nama_database = "resto";

$mysqli = new mysqli($nama_server, $user_server, $password_user_server, $nama_database);

/*if (!$mysqli) {
	echo "Database gagal terkoneksi.";
} else {
	echo "Database berhasil terkoneksi.";
}*/

?>