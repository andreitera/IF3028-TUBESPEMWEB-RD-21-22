<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/d3b9ba139c.js" crossorigin="anonymous"></script>
    <link href="../../public/css/styleCreateLaporan.css" rel="stylesheet">
    <title>Tambah Laporan</title>
</head>
<body>
    <div class="container">
        <div class="atas">
            <nav>
                <div class="logo"><img src="../../public/css/file_gambar/Logo_ITERA.png" alt="logo itera" height="85px"></div>
                <ul>
                    <li><a href="<?php echo base_url(); ?>Welcome/index/"><b>HOME</b></a></li>
                </ul>
            </nav>

            <header>
                <div class="judul">
                    <h2>Layanan Aspirasi dan Pengaduan Online Mahasiswa Teknik Informatika ITERA</h2><br>
                    <p>Sampaikan laporan Anda Langsung Kepada Prodi Teknik Informatika</p><br>
                </div>
            </header>
        </div>
        

        <div class="body">
            <br>  
            <h1>Sampaikan Laporan Anda</h1>
            <hr><br>
            <form action='<?php echo base_url(); ?>Welcome/create_process/' method='post' onSubmit="validasi()">
                <label for="judul"><p>Judul Laporan</p></label><br>
                <textarea name="judul" id="judul" cols="150" placeholder="Ketik Judul Laporan Anda"></textarea>
                <br><br><label for="laporan"><p>Isi Laporan</p></label><br>
                <textarea name="laporan" id="laporan" cols="150" rows="20" placeholder="Ketik Isi Laporan Anda"></textarea>
                <br><br><label for="aspek"><p>Aspek Laporan</p></label><br>
                <select class="aspekLapor" name="aspek" id="aspek">
                    <option value="" disabled selected hidden>Pilih Aspek Laporan Anda</option>
                    <option value="Akademik">Akademik</option>
                    <option value="Non Akademik">Non Akademik</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Organisasi">Organisasi</option>
                </select>
                <br><br><label for="waktu"><p>Tanggal Laporan</p></label><br>
                <input type="date" name="waktu" id="waktu">
                <br><br><label for="file"><p>Lampiran</p></label><br>
                <input class="lampiranFile" type="file" name="file" id="file" value="Tambah Lampiran">
                <br><br>
                <button class="submitLapor" type="submit" name="submit" value="Buat Lapor!">Buat Lapor!</button>
                <br><br>    
                <br>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript">
	function validasi() {
		var judul = document.getElementById("judul").value;
		var laporan = document.getElementById("laporan").value;
		var aspek = document.getElementById("aspek").value;
        var waktu = document.getElementById("waktu").value;
        var file = document.getElementById("file").value;
		if (judul != "" && laporan!="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
            return false;
		}
	}
</script>
</html>
