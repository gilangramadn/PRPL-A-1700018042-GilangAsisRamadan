
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Pemesanan</title>
	
</head>

<body>
	
      <a>YakuzaGame.co.id</a>
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="barangproduk.php">Kategori PC</a></li>
        <li><a href="karyawan.php">Karyawan</a></li> 
        <li><a href="produkpc.php">Produk PC</a></li>
        <li><a href="DataPelanggan.php">Data Pelanggan</a></li>
        <li><a href="DataTransaksi.php">Data Pembayaran</a></li> 
      </ul>
    
</nav>
<div class="container">

  <h1><center>Proses Pencarian</h1>
</form>         
    <div class="table-responsive">
    	<center>
	<table border="1" " >
		 <thead>
		<tr >
			<th >Nomor PC</th>
			<th >Nama Produk</th>
			<th >ID Pelanggan</th>
			<th >ID Karyawan</th>
			<th > Date</th>
			<th >Waktu Bermain</th>
			<th >Harga</th>
			</tr>
	
		</thead>
	<?php 
include "koneksi.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$query = mysqli_query($koneksi,"SELECT prosesbayar.nomor_pc as nomor_pc, prosesbayar.nama_produk as nama_produk, prosesbayar.id_pelanggan as id_pelanggan, prosesbayar.id_karyawan as id_karyawan,prosesbayar.tanggal as tanggal, prosesbayar.waktu_pemakain as waktu_pemakain, prosesbayar.harga as harga FROM prosesbayar WHERE prosesbayar.nomor_pc LIKE '%$key%'");
while ($row = mysqli_fetch_array($query)) {
		?>
	<tr > 
			<td ><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td ><?php echo $row['nama_produk'];?></td>
			<td ><?php echo $row['id_pelanggan'];?></td>
			<td ><?php echo $row['id_karyawan'];?></td>
			<td ><?php echo $row['tanggal'];?></td>
			<td ><?php echo $row['waktu_pemakain']." Jam";?></td>
			<td ><?php echo "Rp."." ". $row['harga'];?></td>
			</tr>
			 </tbody>
				<?php

	}
	?>
	</table>
	<a href="datatransaksi.php"><button class="btn btn-success">Kembali</button></a>
	</div>
</center>
</h1>
</body>
</html>