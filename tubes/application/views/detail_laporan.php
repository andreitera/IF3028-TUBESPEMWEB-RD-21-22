<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<script src="<?php echo base_url(); ?>js/script.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.js"></script>

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

				<p class="isi-lapor-detail">
					<?php 
					echo $isi_laporan->isi;
					?>
				</p>

				<p>Lampiran: </p>
				<?php
				$ekstensi = explode('.',$isi_laporan->file); 

				$ekstensi = strtolower(end($ekstensi));
				
				if($ekstensi == "png" || $ekstensi == "png" || $ekstensi == "jpg" || $ekstensi == "jpeg"){
				?>
				<img src="<?php echo base_url(); ?>files/<?php echo $isi_laporan->file; ?>" alt="gambar" width="50%" height="50%">

				<?php
				}else if($ekstensi == "pdf" || $ekstensi == "doc" || $ekstensi == "docx" || $ekstensi == "xls" || $ekstensi == "xlxs" || $ekstensi == "ppt"|| $ekstensi == "pptx"){
				?>
					<a href="<?php echo base_url() ?>files/<?php echo $isi_laporan->file; ?>" /><?php echo $isi_laporan->file; ?></a>
				
					
				<?php } ?>
			
				<p>
					Waktu: <?php echo $isi_laporan->waktu; ?> &emsp;
					Aspek: <?php echo $isi_laporan->aspek; ?>
					
					<a href="<?php echo base_url('Welcome/edit_laporan/'.$isi_laporan->id) ?>" class="edit">Edit</a>
					<a  href="<?php echo base_url('Welcome/aksi_delete/'.$isi_laporan->id)?>" class="hapus">Hapus Laporan/Komentar <b>X</b></a>
					
				</p>

				<script>
					$('.hapus').on('click', function () {
					return confirm('Apakah anda yakin ingin menghapus?');
					});
				</script>
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
