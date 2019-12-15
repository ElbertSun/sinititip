<?php 
session_start();
//mendapatkan id produk dari url
$id_produk = $_GET['id'];

//jika sudah ada produk tersebut di keranjang, maka jumlah produk tersebut di +1
if (isset($_SESSION['keranjang'][$id_produk])) 
{
	$_SESSION['keranjang'][$id_produk]+=1;
}
// selainitu jika belum ada di keranjang, maka produk itu di anggap beli 1
else 
{
	$_SESSION['keranjang'][$id_produk] = 1;
}



// echo "<prev>";
// print_r($_SESSION);
// echo "</pre>";

//larikan ke halaman keranjang
echo "<script>alert('produk telah dimasukkan dalam keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
 ?>