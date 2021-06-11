<?php
  
  if(isset($_POST['simpan'])){
    include('koneksi.php');
    $judul=$_POST['judul'];
    $harga=$_POST['harga'];
    $penerbit=$_POST['penerbit'];
    $penulis=$_POST['penulis'];
    $update=mysqli_query($koneksi,"update perpus set judul = '$judul',penerbit = '$penerbit',penulis = '$penulis' where harga = '$harga'");
    
  

    if ($update) {
      
      echo "<h2>data berhasil diupdate</h2>";
      echo "<script>window.location = 'index.php'</script>";
    }
    else{
      echo "<h2>gagal menyimpan data</h2>";
      echo "<a href='edit.php ?harga=".$harga."'>kembali</a>";

    }
  }

  else{
    echo "<script>window.history.back()</script>";
  }



?>