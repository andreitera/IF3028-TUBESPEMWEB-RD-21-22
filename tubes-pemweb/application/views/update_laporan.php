<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <script src="https://kit.fontawesome.com/d3b9ba139c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="atas">
            <nav>
                <div class="logo"><img src="file_gambar/Logo_ITERA.png" alt="logo itera" height="85px"></div>
                <ul>
                    <li><a href="#"><b>TENTANG LAPOR</b></a></li>
                    <li><a href="#"><b>STATISTIK</b></a></li>  
                    <li><a href="#"><b>LAPORAN</a></b></li>
                </ul>
            </nav>

            <header>
                
                <div class="judul">
                    <h2>Layanan Aspirasi dan Pengaduan Online Mahasiswa Teknik Informatika ITERA</h2><br>
                    <p>Sampaikan laporan Anda Langsung Kepada Prodi Teknik Informatika</p><br>
                    <hr>
                </div>
                
            </header>
        </div>
        

        <div class="body">  
            <h1>Sampaikan Laporan Anda</h1>
            
            <p>Update Laporan/Komentar</p>
            <br><hr><br>
            <?php foreach ($posts as $post) : ?>
            <form action='<?php echo base_url('Welcome/update_process/'. $post->id ); ?>' method='post'>
                <textarea name="laporan" id="laporan" cols="176" rows="20" placeholder="Laporan/Komentar"><?php echo $post->laporan ?></textarea>
                <br><br>
                <select class="aspekLapor" name="aspek" id="aspek">
                    <option value="Akademik">Akademik</option>
                    <option value="Non Akademik">Non Akademik</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="Organisasi">Organisasi</option>
                </select>
                <br><br>
                <input type="date" name="waktu" id="waktu">
                <br><br>
                <input type="file" name="file" id="file">
                <br><br>
                <button class="updateLapor" type="submit">Update Lapor</button>
                <br><br>    
                <br>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<!-- <body>
    <div id="header">
        <h1>SIMPLE LAPOR!</h1>
    </div>
    <div id="form">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="judul">Buat Laporan/Komentar</label><br>
            <input type="text" id="judul" name="judul"><br><br>
            <label for="isi">Laporan/Komentar</label><br>
            <input type="textarea" placeholder="Laporan/Komentar" id="isi" name="isi" rows="4" cols="50"><br><br>
            <label for="aspek">Pilih Aspek Pelaporan/Komentar</label>
            <select name="aspek" id="aspek">
                <option value="pengaduan">Pengaduan</option>
                <option value="aspirasi">Aspirasi</option>
                <option value="info">Permintaan Informasi</option>
            </select><br><br>
            <input type="file" name="file"><br><br>
            <input type="submit" name="upload" value="Upload"><br><br>
            <input type="submit" value="Update Lapor!">
        </form>
    </div>
</body> -->
</html>