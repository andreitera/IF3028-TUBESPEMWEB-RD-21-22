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
					<h2>Layanan Aspirasi dan Pengaduan Online Mahasiswa ITERA</h2><br>	
				</div> 
				<p>Detail Laporan/Komentar	</p>
				<hr>
				<p class="isi-lapor">
					<?php 
					echo $isi_laporan->isi;
					?>
				</p>
				<p>Lampiran: </p>
				<?php
				
				echo $isi_laporan->file;
				?>
				<p>
					Waktu: <?php echo $isi_laporan->waktu; ?> &emsp;
					Aspek: <?php echo $isi_laporan->aspek; ?>
					
					<a href="<?php echo base_url('Welcome/edit_laporan/'.$isi_laporan->id) ?>" class="edit">Edit</a>
					<a href="<?php echo base_url('Welcome/aksi_delete/'.$isi_laporan->id)?>" class="hapus">Hapus Laporan/Komentar X</a>
					
				</p>

				
			    <hr>
			</div>
		</fieldset>
	</div>

</body>
</html>