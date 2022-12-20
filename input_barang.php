<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang</title>
</head>
<body>
	<?php
		$daftar_kategori = array("Network Device","PC","Sparepart","Printer","Alat","Lainnya");

	?>
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
			<h2>Form Input Barang</h2><br><br>
		
			<form action="input_barang_proses.php" method="post" enctype="multipart/form-data">
				<table border="0">
					<tr>
						<td align="left">Kode Alat</td>
						<td align="left">Kategori</td>
						<td align="left">Merek</td>
						<td align="left">Nama Alat</td>
						<td align="left">Spesifikasi</td>
						<td align="left">Jumlah</td>				
					</tr>
					<tr>
						<td><input type="text" name="kd_alat">&nbsp;</td>
						<td>
							
							<select name="kategori">
								<?php
									foreach ($daftar_kategori as $kategori) {
											echo "<option value='$kategori'>$kategori</option>";
										}
								?>
							</select>
							
						&nbsp;</td>
						<td><input type="text" name="merek" >&nbsp;</td>
						<td><input type="text" name="nama_alat" >&nbsp;</td>
						<td><textarea cols="50" rows="1" name="spek"></textarea>&nbsp;</td>
						<td><input type="text" name="jml">&nbsp;</td>
									
					</tr>
				</table>
				<br>
				<input type="submit" name="simpan!">
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