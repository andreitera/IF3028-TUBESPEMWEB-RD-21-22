<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style_tampilan.css">

</head>
<body>
	<div class="container">
		<div class="content">
		<div class="header">
			<strong>SIMPLE LAPOR!</strong>	
			<br><br><br>
		</div>
		<form action="" method="POST">	
			<center>
				<input type="text" name="cari">
				<button type="submit" name="btncari" style="width: 10%; ">Cari</button>
			</center>
		</form>
		<br>
		<center>
			<a href="">Buat Laporan/Komentar 
			<div style="margin-top: -18px; margin-left: 195px;">
				<a>

					<img src="img/tambah.jpg" width="13px" height="13px">

				</a>	
			
			</div>

		</center>
		<br>
			<p>Laporan/Komentar Terakhir</p>
		<hr>
		@foreach($list_laporan as $key=>$lapor)
		<div class="card">
			<p>{{ $lapor-> isi}}</p>
			<p><img src="img/file.png" width="20px" height="20px"></p>
			<div style="margin-top: -40px; margin-bottom: 17px; margin-left: 25px; width: 290px;">
				Lampiran: {{ $lapor-> lampiran }}
			</div>
			<p style='width: auto; height: auto; margin-top:-35.9px; margin-left: 325px;'>Waktu: {{ $lapor-> waktu }}</p>
			
			<p style="margin-top: -33.7px; margin-left: 535px;">
				<a href=" {{ url('home/'.$lapor->id) }} ">Lihat Selengkapnya
			</p>
			<div style="margin-top: -34px; margin-left: 678px;">
						<img src="img/next-button.png" width="20px" height="20px">
					</a>	
			</div>
		<hr>
		@endforeach
		

		<br><br>
	</div>

</body>
</html>