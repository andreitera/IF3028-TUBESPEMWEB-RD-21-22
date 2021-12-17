<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Laporan</title>
    <link href="{{ asset('../css/style_insert.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="container">	
		<div class="content">
		<div class="header">
			<strong>SIMPLE LAPOR!</strong>
			<br><br>
		</div>

		<br>
		
		<p>Buat Laporan/Komentar</p>
		<hr>
        <textarea name="textarea" placeholder="Laporan/Komentar"></textarea>
        <br>
        <br>
        <form>
            <select name="pilih" id="pilih_jenis"></select>
        </form>
        <br>
        <form>
            <input type="file" placeholder="Choose File">
        </form>
        <br>
        <br>
        <br>
			<div class="detail">
				<button type="submit" style="background-color: rgb(252, 250, 249); margin-top: -2px; margin-right: 10px; border-radius: 10px; ">
				<a href="" onclick="return confirm('Anda yakin ingin men-submit laporan ini?');" style="color: rgb(7, 7, 7); ">
				Buat Laporan
				</a>
				</button>
			</div>
		<br>	
		<hr>
		<br><br>
	</div>
</body>
</html>