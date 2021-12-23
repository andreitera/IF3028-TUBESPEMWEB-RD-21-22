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
					<a href="<?php echo base_url()?>"><h1>SIMPLE LAPOR!</h1><br></a>
				</div>
				<form action="<?php echo base_url('Welcome/cari') ?>" method="get"> 
					<input class="boxcari" type="text" name="keyword" />
					<button class="btncari" type="submit"><img class="ikon-cari" src="<?php echo base_url(); ?>assets/ikon-cari.png">&nbsp;Cari</button>
				</form> <br>

	
				<p align="center">
					<a href="<?php echo base_url('Welcome/buat_laporan') ?>" class="buat-lapor">Buat Laporan/Komentar <b>+</b></a>
				</p>


				<p>Laporan/Komentar Terakhir</p>
				<hr>
				<?php
				
				$no = $this->uri->segment('3') + 1;
					foreach ($lapor as $d) {
						echo "<br><div class='isi-lapor'>";
						echo $d->isi;
						echo "</div>";
				?>
				<br>
				
					<div class="opsional">Waktu: <?php echo $d->waktu; ?> 
						<a  href="<?php echo base_url('Welcome/detail_laporan/'.$d->id) ?>"> &emsp;Lihat Selengkapnya></a>
					</div>
					<div>Lampiran:  <span class="judul-lampiran"> </span><?php echo $d->file; ?></div>
				<hr>
				
				<?php
					}
				?>
				<br>
				<br>
				<div class="halaman">
					<?php 
					echo $this->pagination->create_links();
					?>
				</div>
				
				<div class="titik">
					<p>.</p>
					<p>.</p>
					<p>.</p>
				</div>
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
