<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Resto</title>
</head>
<body>
	<h1>Form Resto</h1>
	<form action="WLResto.php" method="POST">
		<label for="nama_makanan">Nama Makanan:</label>
		<input type="text" name="nama_makanan" id="nama_makanan" required>
		<br><br>
		<label for="harga_makanan">Harga Makanan:</label>
		<input type="number" name="harga_makanan" id="harga_makanan" required>
		<br><br>
		<input type="submit" name="simpan" value="Simpan Data">
	</form>
</body>
</html>