<?php defined('BASEPATH') OR exit('No direct script access allowed'); $this->load->helper('date'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <script src="https://kit.fontawesome.com/d3b9ba139c.js" crossorigin="anonymous"></script>
    <title>Lihat Detail Laporan</title>
</head>
<body>
    <<div class="container">
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
            <h1>Detail Laporan</h1>
            <p>Detail Laporan/Komentar</p>
            <br><hr>
            <?php foreach ($posts as $post) : ?>
            <p><?php echo $post->laporan; ?></p>
            <br>
            <p>Lampiran :</p><br>
            <!-- ini output lampiran -->
            <?php echo $post->file; ?>
            <br><br>
            <p>Waktu : <?php $unix = mysql_to_unix($post->waktu); echo unix_to_human($unix); ?> &nbsp; Aspek : <?php echo $post->aspek; ?></p>
            
            <button onclick="window.location.href='<?php echo base_url('Welcome/update/'. $post->id ); ?>'" class="updateLapor">Update Laporan</button>
            <br>
            <form action='<?php echo base_url('Welcome/delete/'. $post->id ); ?>' method='post'>
                <button class="deleteLapor">Hapus Laporan</button>
            </form>
            <?php endforeach; ?>
            
            <br><br><br>
        </div>
    </div>
</body>
</html>