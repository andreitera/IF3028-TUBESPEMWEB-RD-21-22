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
				<?php echo form_open_multipart('Welcome/edit_aksi'); ?>

					<input type="hidden"  name="id" value="<?php echo $data_lapor->id ?>">
					<textarea id="boxlapor" class="boxlapor"  type="text" name="isi" placeholder="Laporan/Komentar" require><?php echo $data_lapor->isi ?></textarea><br><br>	
					<select id="aspek" name="aspek" class="boxaspek" require>
						<?php
                                $list_aspek = array( 'Dosen', 'Staff', 'Mahasiswa', 'Infrastruktur', 'Pengajaran' );
                                for( $i=0; $i<count($list_aspek); $i++ ) {
                                    if($data_lapor->aspek == $list_aspek[$i]){
                                        echo "<option value=".$list_aspek[$i]." selected>".$list_aspek[$i]."</option>";
                                    }
                                    else{
                                        echo "<option value=".$list_aspek[$i].">".$list_aspek[$i]."</option>";
                                    }
                                }
                            ?>
					</select><br><br>	
					<input type="file" name="file" class="boxupload" >
					<p>File yang tersimpan: <a href="<?php echo base_url() ?>files/<?php echo $data_lapor->file; ?>" /> <?php echo $data_lapor->file; ?></a></p>
					
					
					<input class="buttonsubmit" type="submit" name="submit" value="Update" onclick ="return cek_kata()">
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
