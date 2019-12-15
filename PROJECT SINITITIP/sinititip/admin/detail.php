<h2>Detail Pembelian</h2> 
<?php 
	$ambil = $koneksi->query("SELECT * FROM pembelian JOIN customer 
		ON pembelian.id_customer=customer.id_customer 
			WHERE pembelian.id_pembelian= '$_GET[id]'");
	$detail = $ambil->fetch_assoc();
 ?>
<!--  <pre><?php print_r($detail); ?></pre> -->

 <strong><?php echo $detail['nama_customer']; ?></strong> <br>
 <p>
 	<?php echo $detail['contact']; ?> <br>	
 	<?php echo $detail['email_customer']; ?>
 </p>
 <p>
 	Tanggal Pembelian : <?php echo $detail['tanggal_pembelian']; ?> <br>
 	Total Pembelian : <?php echo $detail['total_pembelian']; ?>
 </p>

 <table  class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Produk</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subtotal</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $nomor=1; ?>
 		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk
 		WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
 		<?php while ($pecah=$ambil->fetch_assoc()) { ?>
 		<tr>
 			<td><?php echo $nomor;	?></td>
 			<td><?php echo $pecah['nama_produk']; ?></td>
 			<td><?php echo $pecah['harga_produk']; ?></td>
 			<td><?php echo $pecah['jumlah']; ?></td>
 			<td>
 				<?php echo $pecah['harga_produk']*$pecah['jumlah']; ?>
 			</td>
 		</tr>
 		<?php $nomor++; ?>	
 		<?php } ?>
 	</tbody>
 </table>