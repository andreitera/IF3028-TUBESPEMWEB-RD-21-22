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
				<form action="<?php echo base_url('Welcome/aksi_edit')?>" method="post">
					<input type="hidden"  name="id" value="<?php echo $data_lapor->id ?>">
					<textarea class="boxlapor"  type="text" name="isi" placeholder="Laporan/Komentar" require><?php echo $data_lapor->isi ?></textarea><br><br>	
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
					<input type="file" name="file" class="boxupload" value = "<?php echo $data_lapor->file ?>" > <br><br><br>	
					<input class="buttonsubmit" type="submit" name="submit" value="Update">
				</form>
			</div>
		</fieldset>
	</div>

</body>
</html>
