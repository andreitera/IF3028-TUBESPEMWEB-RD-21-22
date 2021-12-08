<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<fieldset>	
			<div class="content">
				<div class="header">
					<h2>Layanan Aspirasi dan Pengaduan Online Mahasiswa ITERA</h2><br>	
				</div>
				<p>Detail Laporan/Komentar	</p>
				<hr>
				<form>
					<input class="boxlapor" type="text" name="isi" placeholder="Laporan/Komentar"></input><br><br>	
					<select id="aspek" name="aspek" class="boxaspek">
						<option >Pilih Aspek Pelaporan/Komentar</option>
						<option value="infrastruktur">Infrastrukur</option>
						<option value="dosen">Dosen</option>
						<option value="staff">Staff</option>
						<option value="mahasiswa">Mahasiswa</option>
						<option value="pengajaran">Pengajaran</option>
					</select><br><br>	
					<input type="file" name="file" class="boxupload"><br><br><br>	
					<input class="buttonsubmit" type="submit" name="submit" value="Buat LAPOR!">
				</form>
			</div>
		</fieldset>
	</div>

</body>
</html>