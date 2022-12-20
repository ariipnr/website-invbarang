<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
</head>
<body>
	<div id="container">
		<section id="menu" class="no-sticky">
			<div class="content">
				<div class="left">
					<ul> 
						<li><a href="index.html">Beranda</a></li>
						<li><a href="data_barang.php">Data Barang</a></li>
						<li><a href="input_barang.php">Input Barang</a></li>
						<li><a href="tentang_kami.html">Tentang Kami</a></li>

					</ul>
				</div>	

				
				<div class="right">
					<span class="putih">
						<span id="jam"></span>
						<span> : </span>
						<span id="menit"></span>
						<span > : </span>
						<span id="detik"></span>
					</span>

				<a href="" class="btn btn-white">Login</a>
				</div>
			


				<div class="clear"></div>
			</div>
		</section>

		</div>

		<section class="navy" id="section1">
			<div class="content">
				<img class="left" src="image/LogoIPB.png" width="400px">
				<h1 class="right">Inventaris Barang Lab Komputer</h1>
				<p class="right">Inventaris Barang Lab Komputer Sekolah Vokasi Institut Pertanian Bogor</p>
			
			</div>
		</section>

		
		<section class="white" id="section2">
			<h2>Daftar Barang</h2>
			<a href="input_barang.php">Input Barang</a>
			<br><br><br>
			<?php
				include "aksi.php";
					$query = mysqli_query($koneksi,"SELECT * FROM input_barang");
			?>
				<form action="" method="post">
	   				<table border="1" cellpadding="15" cellspacing="1">
	        			<tr>
        					<th>No</th>
         				   	<th align="left">Kode Alat</th>
							<th align="left">Kategori</th>
							<th align="left">Merek</th>
							<th align="left">Nama Alat</th>
							<th align="left">Spesifikasi</th>
							<th align="left">Jumlah</th>
       					</tr>
      						<?php if(mysqli_num_rows($query)>0){ ?>
      						<?php
         				   $no = 1;
         				   while($data = mysqli_fetch_array($query)){
        					?>
       					<tr>
	           				<td align="left"><?php echo $no ?></td>
	            			<td align="left"><?php echo $data["kode_alat"];?></td>
	            			<td align="left"><?php echo $data["kategori"];?></td>
	            			<td align="left"><?php echo $data["merek"];?></td>
	            			<td align="left"><?php echo $data["nama_alat"];?></td>
	            			<td align="left"><?php echo $data["spesifikasi"];?></td>
	            			<td align="left"><?php echo $data["jumlah"];?></td>
	            			<td>
              				<a href="#">Edit</a> |
                			<a href="delete.php?no=<?php echo $data["no"]; ?>"">Delete</a> 
            				</td>
        				</tr>
       						<?php $no++; } ?>
        					<?php } ?>
    					</table>
				</form>
		</section>

		<section class="navy" id="section3">
			<div class="content">
			
			<h4>CONTACT US</h4>
			<span>Jl. Kumbang No. 14 Cilibende Bogor, Jawa Barat, Indonesia</span><br>
			<span>Phone: (0251) 8329101</span><br>
			<span>E-mail: sv@apps.ipb.ac.id.</span><br>

			</div>
		<div class="clear"></div>
		</section>

		<section class="gray" id="section4">
			<div class="content">
				<p>Copyright © 2019 - Developed by Arief NR</p>
			</div>

		</section>

	
	</div>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</body>
</html>