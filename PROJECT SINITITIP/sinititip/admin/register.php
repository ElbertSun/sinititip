<?php 
session_start();
$koneksi = new mysqli("localhost", "root", "", "sinititip");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>register pelanggan</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/register.css">
</head>
<body>

<!-- <nav class="navbar navbar-default">
	<div class="container">
	<ul class="nav navbar-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="keranjang.php">Keranjang</a></li> -->
		<!-- jika sudah login(ada session pelanggan) -->
<!-- 		<?php if (isset($_SESSION['customer'])): ?>
			<li><a href="logout.php">Logout</a></li> -->
		<!-- selain itu(belum login||blm ada session pelanggan) -->
<!-- 		<?php else: ?>
		<li><a href="login.php">Login</a></li>
		<?php endif ?>
		<li><a href="checkout.php">Checkout</a></li>
	</ul>
	</div> -->
</nav>

<div class="container">
	<div class="row text-center">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading" style="background-color: orange;">
					<h3 class="panel-title">Register</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="nama" class="form-control" name="nama">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label>No telfon</label>
							<input type="telfon" class="form-control" name="telfon">
						</div>
<!-- 						<button class="btn btn-primary" name="login">Login</button> -->
						<button class="btn btn-warning" name="save">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
if (isset($_POST['save'])) 
{
	// $nama = $_FILES['foto']['name'];
	// $lokasi = $_FILES['foto']['tmp_name'];
	// move_uploaded_file($lokasi, "../foto_produk/".$nama);
	$koneksi->query("INSERT INTO admin
		(nama_lengkap, username, password ,contact)
		VALUES('$_POST[nama]','$_POST[email]','$_POST[password]','s$_POST[telfon]')");

	echo "<div class='alert alert-info'>Akun anda telah di register</div>";
	echo "<meta http-equiv='refresh' content='1;url=login.php'>";
}
 ?>