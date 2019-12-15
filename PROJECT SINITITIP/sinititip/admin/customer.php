<h2>Data Pelanggan</h2>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM customer"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) {  ?>
		<tr>
			<td><?php echo $nomor;	?></td>
			<td><?php echo $pecah['nama_customer']; ?></td>
			<td><?php echo $pecah['email_customer']; ?></td>
			<td><?php echo $pecah['contact']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
</div>









