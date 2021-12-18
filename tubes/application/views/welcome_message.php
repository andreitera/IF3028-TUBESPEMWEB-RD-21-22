<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
	<div class="container">
		<fieldset>	
			<div class="content">
				<div class="header">
					<h2>SIMPLE LAPOR!</h2><br>	
				</div>
				<form action="form.php" method="post"> 
					<input class="boxcari" type="text" name="term" />
					<input class="btncari"type="submit" value="Cari" /> 
				</form> <br>
				<p align="center">
					<a href="<?php echo base_url('Welcome/buat_laporan') ?>" class="buat-lapor">Buat Laporan/Komentar +</a>
				</p>
				<p>Laporan/Komentar Terakhir</p>
				<hr>
				<?php
					foreach ($data_lapor as $d) {
						echo "<br><div class='isi-lapor'>";
						echo $d->isi;
						echo "</div>";
				?>
				<div><br>Lampiran: <?php echo $d->file; ?>
					<div class="opsional">Waktu: <?php echo $d->waktu; ?> 
					<a  href="<?php echo base_url('Welcome/detail_laporan/'.$d->id) ?>"> &emsp;Lihat Selengkapnya></a>
					</div>
					<br>
					<hr>
				</div>
			
				
				<?php
					}
				?>
			</div>
		</fieldset>
	</div>

</body>
</html>
