<!DOCTYPE html>
<html lang="en">
<head>
	<title>Barang Produk</title>
        
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
    

<body>

<div class="container">

  <h1><center>Data Pelanggan</h1>
	<form method="post" action="update.php">
	<!--<form class="form-inline md-form mr-auto mb-4" method="post" action="search.php">
  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
  <button class="btn btn-success" type="submit">Search</button>-->
	<div class="table-responsive">
		<center>
	<table border="1" >
		 <thead>
		<tr >
			<th >Id Pelanggan</th>
			<th >Nama Pelanggan</th>
			</tr>
	
		</thead>
		<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM pelanggan");
		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tbody>
		<tr > 
			<td ><?php echo $row['id_pelanggan'];?></td><!--namaatribut-->
			<td ><?php echo $row['nama'];?></td>

			<!--
			<a href="update.php?id=<?php echo $row['id_pelanggan']; ?>" >Update</a>

			<a href="delete.php?id=<?php echo $row['id_pelanggan']; ?> ">Delete</a>

			<a href="insert.php?id=<?php echo $row['id_pelanggan']; ?>">Insert</a>-->
</a></td>
			
				
			
				
		
		</tr>
			 </tbody>
		<?php

	}
	?>
	</table>
</div>
</form>
</div>
</div>
</body>
</body>
</html>