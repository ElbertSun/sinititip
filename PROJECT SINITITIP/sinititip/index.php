<?php 
session_start();
// koneksi ke database
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sinititip</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	<link href="admin/assets/css/style.css" rel="stylesheet" />
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-default">
	<div class="container">
	<ul class="nav navbar-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="keranjang.php">Keranjang</a></li>
		<!-- jika sudah login(ada session pelanggan) -->
		<?php if (isset($_SESSION['customer'])): ?>
			<li><a href="logout.php">Logout</a></li>
		<!-- selain itu(belum login||blm ada session pelanggan) -->
		<?php else: ?>
		<li><a href="login.php">Login</a></li>
		<?php endif ?>
<!-- 		<li><a href="checkout.php">Checkout</a></li> -->
	</ul>
	</div>
</nav>
<div class="banner">
	<img src="admin/assets/img/10.png" width="100%" height="200">
</div>

<!-- konten -->
<div class="table-responsive">
<section class="konten">
	<div class="container">
		<h1>Produk Terbaru</h1>
		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
			<?php while($perproduk = $ambil->fetch_assoc()) { ?>

			<div class="col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp.<?php echo number_format($perproduk['harga_produk']); ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
</section>
</div>

</body>
</html>