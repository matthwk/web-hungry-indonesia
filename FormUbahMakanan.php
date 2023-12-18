<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Resto</title>
</head>
<body>
	<?php include "KoneksiDB.php"; ?>
	<?php $no_makanan = $_GET['nomakanan']; ?>
	<?php $query = $mysqli->query("SELECT * FROM makanan WHERE no_makanan = '$no_makanan'"); ?>
	<?php $tampil_data = mysqli_fetch_object($query); ?>
	<h1>Form Ubah Makanan</h1>
	<form action="UbahMakanan.php" method="POST">
		<input type="hidden" name="no_makanan" value="<?php echo $no_makanan; ?>">
		<label for="nama_makanan">Nama Makanan:</label>
		<input type="text" name="nama_makanan" id="nama_makanan" value="<?php echo $tampil_data->nama_makanan; ?>" required>
		<br><br>
		<label for="harga_makanan">Harga Makanan:</label>
		<input type="number" name="harga_makanan" id="harga_makanan" value="<?php echo $tampil_data->harga_makanan; ?>" required>
		<br><br>
		<label for="deskripsi_makanan">Deskripsi Makanan:</label>
		<textarea name="deskripsi_makanan" id="deskripsi_makanan" required><?php echo $tampil_data->deskripsi_makanan; ?></textarea>
		<br><br>
		<label for="foto_makanan">Foto Makanan:</label>
		<input type="file" name="foto_makanan" id="foto_makanan" required>
		<br><br>
		<input type="submit" name="ubah" value="Ubah Data">
		<a href="index.php">
			<button type="button">Kembali</button>
		</a>
	</form>
</body>
</html>