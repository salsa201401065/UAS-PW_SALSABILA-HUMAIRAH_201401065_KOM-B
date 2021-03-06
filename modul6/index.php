<?php
  session_start();
  include "koneksi.php";
  if(!isset($_SESSION['username'])){
  header ("location:login.php");
}
if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}

?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Universitas Indonesia </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style2.css">
	
	
</head>
<style>
 body{
      color: #808080;
      font-family: verdana;
      font-size: 20px ;
      text-align: center;
      background-color: #FFFACD;
    
    }
    container{
      width: 800px;
      margin: auto;

    }

  </style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Universitas Indonesia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aksi_logout.php">log out</a>
          <a class="dropdown-item" href="contactui.html">Contact us</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="kalkulator.html">Kalkulator</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">My Profile</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg.1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome to Our University Website!</h5>
        <p style="color: #00000; font-size: 20px; letter-spacing: 3px; font-family:"lucida console">Veritas, Probitas, Iustitia yang artinya Kebenaran, Kejujuran, Keadilan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg.2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mission and Vision</h5>
        <p style="color: #00000; font-size: 20px; letter-spacing: 3px; font-family:"lucida console">???Menjadi pusat ilmu pengetahuan, teknologi, dan kebudayaan yang unggul dan berdaya saing, melalui upaya mencerdasakan kehidupan bangsa untuk meningkatkan kesejahteraan masyarakat, sehingga berkontribusi bagi pembangunan masyarakat Indonesia dan dunia???.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg.3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Purpose</h5>
        <p style="color: #00000; font-size: 20px; letter-spacing: 3px; font-family:"lucida console">"Menciptakan komunitas pendidikan yang inklusif, berdasarkan pada adab, kepercayaan, integritas, saling menghargai dan kebhinekaan dalam lingkungan yang aman dan bersahabat".</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
<div class="card-deck mt-5 mb-5">
  <div class="card">
    <img src="fkui.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fakultas Kedokteran</h5>
      <p class="card-text">Fakultas Kedokteran Universitas Indonesia atau dikenal sebagai FK UI merupakan salah satu sekolah kedokteran di Indonesia. FK UI memiliki dua kampus utama yaitu Kampus Salemba dan Kampus Depok yang terletak di Gedung Rumpun Ilmu Kesehatan.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="fkgui.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fakultas Kedokteran Gigi dan Mulut</h5>
      <p class="card-text">Fakultas Kedokteran Gigi UI disingkat FKG UI adalah fakultas kedokteran khusus untuk kesehatan gigi dan mulut yang berada di bawah Universitas Indonesia.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="farmasiui.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fakultas Farmasi</h5>
      <p class="card-text">Fakultas Farmasi adalah fakultas termuda yang berada di bawah Universitas Indonesia yang mempelajari tentang Ilmu Farmasi. Fakultas Farmasi adalah bagian dari Rumpun Ilmu Kesehatan Universitas Indonesia.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<h2> DAFTAR BUKU PERPUS UI 2021</h2>
<a href="tambah.php"><h4>Tambah Buku</h4>
<div class="container">
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th> No </th>
				<th> Judul </th>
				<th> Harga </th>
				<th> Penerbit </th>
        <th> Penulis </th>
        <th> Opsi </th>
			</tr>
		</thead>
		<?php
        include_once 'koneksi.php';
        $no=1;
        $data=mysqli_query($koneksi,"select * from perpus");
        while ($d=mysqli_fetch_array($data)) {
    ?>

        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['judul']; ?></td>
          <td><?php echo $d['harga']; ?></td>
          <td><?php echo $d['penerbit']; ?></td>
          <td><?php echo $d['penulis']; ?></td>
          <td>
            <a href="edit.php ?harga=<?php echo $d['harga'];?>">edit</a>
            <a href="hapus.php ?harga=<?php echo $d['harga'];?>">hapus</a>
          </td>
        </tr>
    



    <?php
    }
    ?>
	</table>
  <div class="container">
  <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126886.09482330483!2d106.75648355820312!3d-6.369392799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1b202a39e5%3A0xecced917127d0fed!2sKampus%20UI!5e0!3m2!1sen!2sid!4v1619875686196!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

  <footer>
    <img src="Carousel(2).jpg" alt="logo">
  </footer>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>