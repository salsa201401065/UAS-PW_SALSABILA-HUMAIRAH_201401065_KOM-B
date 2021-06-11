<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Universitas Indonesia </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
</head>
<body>
	<?php
		include('koneksi.php');
		$harga=$_GET['harga'];
		$show=mysqli_query($koneksi, "select *from perpus where harga = '$harga'");
		if (mysqli_num_rows($show)==0) {
			echo '<script> window.history.back()</script>';
		}
		else{
			$d= mysqli_fetch_assoc($show);

		}
	?>

		<form action="edit_proses.php" method="post">
		<input type="hidden" name="harga" value="<?php echo $harga; ?>">
		<table>
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td>
					<input type="text" name="judul" size="33" value="<?php echo $d['judul']; ?>" required>
				</td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td>
					<input type="text" name="penerbit" size="33" value="<?php echo $d['penerbit']; ?>" required>
				</td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td>:</td>
				<td>
					<input type="text" name="penulis" size="33" value="<?php echo $d['penulis']; ?>" required>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td> <input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
		</form>

</body>