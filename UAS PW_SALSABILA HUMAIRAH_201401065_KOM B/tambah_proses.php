<?php
if(isset($_POST['tambah'])){
	include_once 'koneksi.php';
	$harga = $_POST['harga'];
	$judul = $_POST['judul'];
	$penerbit = $_POST['penerbit'];
	$penulis = $_POST['penulis'];
	$input = mysqli_query($koneksi,"insert into perpus (harga,judul,penerbit,penulis) values ('$harga','$judul','$penerbit','$penulis')");
	
	if($input){
		echo "<h3>data berhasil ditambahkan</h3>";
		echo "<script>window.location='index.php'</script>";
	}
	else {
		echo "gagal menambahkan data";
		echo "<a href = 'tambah.php'>kembali</a>";
	}
}

else{
	echo "<script>window.history.back()</script>";
}

?>