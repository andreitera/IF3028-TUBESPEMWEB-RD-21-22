<!DOCTYPE html>
<html>
<head>
	<title>Detail Laporan</title>
	<link rel="stylesheet" type="text/css" href="/css/style_detail.css">
</head>
<body>
	<div class="container">
		<div class="content">
		<div class="header">
			<strong>SIMPLE LAPOR!</strong>
			<br><br>
		</div>		
		<br>
		<p>Detail Laporan/Komentar</p>
		<hr>
		<br>
			<p>
			{{ $model -> isi}}
			</p>
			<p>Lampiran:   </p>
			<img id="gambar_lampiran" src="{{ asset('storage/'.$model->lampiran) }}" alt="">
			<div>
				<a href="">
				<img src="/img/edit-file.png" width="25px" height="25px" style="margin-bottom: -43px; margin-left: 410px;"> 
				</a>
			</div>
			<div class="kiri">
				<p>Waktu: {{ $model -> waktu }} </p>
				<p>Aspek : {{ $model -> aspek }} </p>
			</div>
			
			<div style="margin-top: -42px; margin-left: 440px;">
			<button style="background-color: rgba(255, 255, 255, 0.205); border-radius: 10px; ">
			<a href="{{url('home/'.$model->id.'/edit')}}" style="color: black;">Edit</a>
			</button>
			</div>
			<div class="detail">
				<button type="submit" style="background-color: rgb(252, 250, 249); margin-top: -2px; margin-right: 10px; border-radius: 10px; ">
				<a href="" onclick="return confirm('Anda yakin ingin menghapus laporan ini?');" style="color: rgb(7, 7, 7); ">
				Hapus Laporan/Komentar
				</a>
				</button>
			</div>
			<div style="margin-left: 495px; margin-top:-28px;">
				<a href="">
				<img src="/img/delete.png" width="20px" height="20px"> 
				</a>
			</div>
		<br>
		<hr>
		<br><br>
	</div>
</body>
</html>