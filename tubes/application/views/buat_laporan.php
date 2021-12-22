<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	
</head>
<body>
	<div class="container">
		<fieldset>	
			<div class="content">
				<div class="header">
					<a href="<?php echo base_url()?>"><h1>SIMPLE LAPOR!</h1><br></a>
				</div>
				<p>Detail Laporan/Komentar	</p>
				<hr>
				
				<?php echo form_open_multipart('Welcome/tambah_aksi'); ?>
					<textarea id = "boxlapor" class="boxlapor" type="text" name="isi" placeholder="Laporan/Komentar" require></textarea><br><br>	
					<select id="aspek" name="aspek" class="boxaspek" require>
						<option disabled selected>Pilih Aspek Pelaporan/Komentar</option>
						<option value="infrastruktur">Infrastrukur</option>
						<option value="dosen">Dosen</option>
						<option value="staff">Staff</option>
						<option value="mahasiswa">Mahasiswa</option>
						<option value="pengajaran">Pengajaran</option>
					</select><br><br>	
					<input type="file" name="file" class="boxupload" id="file" >
					<br><br><br>	
					<input onclick ="return cek_kata()" class="buttonsubmit" type="submit" name="submit" value="Buat LAPOR!">
				<?php echo form_close(); ?>
				<br><br><br>
				<hr>
				<div class="footer">
					<p>&copy Copyright by Frinaldo Sinaga - 119140064 | Gilang Ashari Abimanyu - 119140040</p>
					<span>2021</span>
				</div>
			</div> 
		</fieldset>
	</div>

</body>
</html>
