<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" media="all" href="assets/css/report.css" />

	<title>Tampilan Lapor</title>

	<script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>"></script>
</head>

<body>
	<fieldset>
		<header>
			<div class="container">
				<center>
					<h1><a href="<?php echo base_url() ?>" style="color: white; text-decoration: none;">Layanan Aspirasi
							dan Pengaduan Online Rakyat <br></a></h1>
							<h3>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h3>
					<hr style="width: 70px;">
				</center>
			</div>
		</header>
		<section id="buatlaporan">
			<div class="container">
				<h3>Buat Laporan</h3>
				<hr>
				<br>
			</div>
		</section>

		<section id="formbuatlaporan">
			<div class="container">
				<form name="createForm" onsubmit="return validasi()" action="tambah" method="POST"
					enctype="multipart/form-data">

					<textarea name="laporan" id="laporan" cols="77" rows="20" placeholder="Laporan"></textarea>
					<br><br>

					<select name="aspek" id="aspek">
						<option disabled selected value>Pilih Aspek Pelaporan</option>
						<option value="Umum">Umum</option>
						<option value="Pelajar">Pelajar</option>
						<option value="Tendik">Tendik</option>
						<option value="Pengajaran">Pengajaran</option>
					</select>
					<br>
					<br>
					<input type="file" name="lampiran" id="lampiran">
					<br><br>
					<hr>
					<br>
					<button type="submit" class="button-1" name="submit" value="simpan">Buat LAPOR!</button>
					<br>
				</form>
				<br>
			</div>
		</section>
	</fieldset>
</body>
</html>
