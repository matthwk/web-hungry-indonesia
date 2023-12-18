<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table Makanan</title>
</head>
<body>
	<?php include "KoneksiDB.php"; ?>
	<?php $nomor = 1; ?>
	<h1>Table Makanan</h1>
	<table border="1" width="100%">
		<tr>
			<th>No. Makanan</th>
			<th>Nama Makanan</th>
			<th>Harga Makanan</th>
			<th>Deskripsi Makanan</th>
			<th>Foto Makanan</th>
			<th>Aksi</th>
		</tr>
		<?php $query = $mysqli->query("SELECT * FROM makanan"); ?>
		<?php while ($tampil_data = mysqli_fetch_array($query)) { ?>
		<tr>
			<td align="center"><?php echo $nomor++; ?>.</td>
			<td><?php echo $tampil_data['nama_makanan']; ?></td>
			<td align="center">Rp. <?php echo $tampil_data['harga_makanan']; ?>,-</td>
			<td align="center"><?php echo $tampil_data['deskripsi_makanan']; ?></td>
			<td><?php echo $tampil_data['foto_makanan']; ?></td>
			<td align="center">
				<a href="FormUbahMakanan.php?nomakanan=<?php echo $tampil_data['no_makanan']; ?>"><button type="button">Ubah Data</button></a>
				&nbsp;
				<a href="HapusMakanan.php?nomakanan=<?php echo $tampil_data['no_makanan']; ?>" onclick="return confirm('Hapus data ini?');"><button type="button">Hapus Data</button></a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<a href="FormTambahMakanan.php">
		<button type="button">Tambah Data</button>
	</a>
</body>
</html>