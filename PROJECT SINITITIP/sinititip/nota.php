<?php 
session_start();
include 'koneksi.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Nota Pembelian</title>
 	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
 	<link href="admin/assets/css/style.css" rel="stylesheet" />
 </head>
 <body>
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
		<li><a href="checkout.php">Checkout</a></li>
	</ul>
	</div>
</nav>

<section class="konten">
	<div class="container">
		
	<h2>Detail Pembelian</h2> 
		<?php 
			$ambil = $koneksi->query("SELECT * FROM pembelian JOIN customer 
				ON pembelian.id_customer=customer.id_customer 
					WHERE pembelian.id_pembelian= '$_GET[id]'");
			$detail = $ambil->fetch_assoc();
		 ?>
<!-- 		 <pre><?php print_r($detail); ?></pre> -->

		 <div class="row">
		 	<div class="col-md-4">
		 		<h3>Pembelian</h3>
		 		<strong>No. Pembelian: <?php echo $detail['id_pembelian'] ?></strong><br>
		 		Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
		 		Total: Rp. <?php echo number_format($detail['total_pembelian']); ?> 
		 	</div>
		 	<div class="col-md-4">
		 		<h3>Pelanggan</h3>
		 		<strong>Nama : <?php echo $detail['nama_customer']; ?></strong> <br>
				 <p>
				 Telepon : <?php echo $detail['contact']; ?> <br>	
				 Email : <?php echo $detail['email_customer']; ?>
				 </p>
		 	</div>
		 	<div class="col-md-4">
		 		<h3>Pengiriman</h3>
		 		<strong><?php echo $detail['nama_kota'] ?></strong>	<br>
		 		Ongkos Kirim: Rp. <?php echo number_format($detail['tarif']); ?><br>
		 		Alamat : <?php echo $detail['alamat_pengiriman'] ?>
		 	</div>
		 </div>
		<div class="table-responsive">
		 <table  class="table table-bordered">
		 	<thead>
		 		<tr>
		 			<th>No</th>
		 			<th>Nama Produk</th>
		 			<th>Harga</th>
		 			<th>Berat</th>
		 			<th>Jumlah</th>
		 			<th>Subberat</th>
		 			<th>Subtotal</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<?php $nomor=1; ?>
		 		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
		 		<?php while ($pecah=$ambil->fetch_assoc()){ ?>
		 		<tr>
		 			<td><?php echo $nomor;	?></td>
		 			<td><?php echo $pecah['nama']; ?></td>
		 			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
		 			<td><?php echo $pecah['berat']; ?> Gr.</td>
		 			<td><?php echo $pecah['jumlah']; ?></td>
		 			<td><?php echo $pecah['subberat'] ?> Gr.</td>
		 			<td>Rp. <?php echo number_format($pecah['subharga']) ?></td>
		 		</tr>
		 		<?php $nomor++; ?>	
		 		<?php } ?>
		 	</tbody>
		 </table>
		</div>
			
		<div class="row">
			<div class="col-md-7">
				<div class="alert alert-info">
					<p>
						Silakan Melakukan Pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?> ke <br>
						<strong>BANK BNI 12345678 A/N TOMY	</strong>
					</p>
					</p>
					<strong>BUKTI PEMBAYARAN DIKIRIM MELALUI WHATSAPP (0822-8539-9535)	</strong>
					</p>
					<p>
							<strong>TERIMA KASIH	</strong>
					</p>
				</div>
			</div>
		</div>

<a href="index.php" class="btn btn-warning">Back To Home</a>
	</div>
</section>
 </body>
 </html>