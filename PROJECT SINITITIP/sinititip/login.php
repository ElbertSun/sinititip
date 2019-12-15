<?php 
session_start();
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login pelanggan</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	<link href="admin/assets/css/loginpelanggan.css" rel="stylesheet" />
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
<div class="tabel-responsive">
<div class="container">
	<div class="row">
		<div class="col-md-4" style="width: 100%;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login Pelanggan</h3>
				</div>
				<div class="panel-body" style="width: 1000px;">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-primary" name="login">Login</button>
						<a href="register.php" class="btn btn-warning">Register</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php 
//jika ada tombol login (tombol login ditekan)
if (isset($_POST["login"])) 
{
	$email = $_POST["email"];
	$password = $_POST["password"];	
	//lakukan query ngecek akun di tabel pelanggan di db
	$ambil = $koneksi->query("SELECT * FROM customer WHERE email_customer='$email' AND password_customer='$password'");

	//ngitung akun yang terambil
	$akunyangcocok = $ambil->num_rows;

	//jika 1 akun  yang cocok, maka diloginkan
	if ($akunyangcocok==1) 
	{
		//anda sukses login
		//mendapatkan akun dalam bentuk array
		$akun = $ambil->fetch_assoc();
		// simpan di session pelanggan
		$_SESSION["customer"] = $akun;
		echo "<script>alert('login berhasil');</script>";
		echo "<script>location='index.php';</script>";	
	}
	else 
	{
		//anda gagal login
		echo "<script>alert('anda gagal login, periksa kembali akun anda');</script>";
		echo "<script>location='login.php';</script>";	
	}

}




 ?>


</body>
</html>