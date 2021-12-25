<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Laporan</title>
    <link rel="stylesheet" href="/css/style_insert.css">
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
            <form method="post" action="{{ url('home') }} " enctype="multipart/form-data">
                @csrf
                <textarea name="isi" placeholder="Laporan/Komentar"></textarea>
                <br><br>
                
                    <select name="aspek" id="pilih_jenis">
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="pembangunan">Pembangunan</option>
                        <option value="kekerasan">kekerasan</option>
                        <option value="kehilangan">kehilangan</option>
                        <option value="kekerasan seksual">kekerasan seksual</option>
                        <option value="jalanan">jalanan</option>
                        <option value="lainnya">jalanan</option>
                    </select>

                <br>
                    <input type="file" name="lampiran" id="laporan" placeholder="Choose File">
            
                <br><br><br>
                    <div class="detail">
                        <button type="submit" style="background-color: rgb(252, 250, 249); margin-top: -2px; margin-right: 10px; border-radius: 10px; ">
                        <a href="{{ url('home') }}" onclick="return confirm('Anda yakin ingin men-submit laporan ini?');" style="color: rgb(7, 7, 7); ">
                        Buat Laporan
                        </a>
                        </button>
                    </div>
            </form>
            <br><hr><br><br>

        </div>
	</div>
</body>
</html>