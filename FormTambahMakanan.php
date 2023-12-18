<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Resto</title>
</head>
<body>
	<h1>Form Tambah Makanan</h1>
	<form action="SimpanMakanan.php" method="POST">
		<label for="nama_makanan">Nama Makanan:</label>
		<input type="text" name="nama_makanan" id="nama_makanan" required>
		<br><br>
		<label for="harga_makanan">Harga Makanan:</label>
		<input type="number" name="harga_makanan" id="harga_makanan" required>
		<br><br>
		<label for="deskripsi_makanan">Deskripsi Makanan:</label>
		<textarea name="deskripsi_makanan" id="deskripsi_makanan" required></textarea>
		<br><br>
		<label for="foto_makanan">Foto Makanan:</label>
		<input type="file" name="foto_makanan" id="foto_makanan" required>
		<br><br>
		<input type="submit" name="simpan" value="Simpan Data">
		<a href="index.php">
			<button type="button">Kembali</button>
		</a>
	</form>
</body>
</html>