<?php defined('BASEPATH') OR exit('No direct script access allowed'); $this->load->helper('date'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/d3b9ba139c.js" crossorigin="anonymous"></script>
    <link href="../../public/css/styleDetail.css" rel="stylesheet">
    <title>Lihat Detail Laporan</title>
</head>
<body>
    <div class="container">
        <div class="atas">
            <nav>
                <div class="logo"><img src="../../public/css/file_gambar/Logo_ITERA.png" alt="logo itera" height="85px"></div>
                <ul>
                    <li><a href="<?php echo base_url(); ?>Welcome/index/"><b>HOME</b></a></li>
                    <li><a href="<?php echo base_url(); ?>Welcome/add/"><b>BUAT LAPORAN</b></a></li>  
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
            <h1>Detail Laporan</h1>
            <hr><br>
            
            <?php foreach ($posts as $post) : ?>
                <p><b><?php echo $post->judul; ?></b></p><br>
                <p><?php echo $post->laporan; ?></p><br>
                <p>Lampiran :</p><br>
                <?php echo $post->file; ?>
                <br><br>
                <p>Waktu : <?php $unix = mysql_to_unix($post->waktu); echo unix_to_human($unix); ?> &nbsp; Aspek : <?php echo $post->aspek; ?></p>
                
                <form action='<?php echo base_url('Welcome/delete/'. $post->id ); ?>' method='post'>
                    <button class="deleteLapor"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp; Hapus Laporan </button>
                </form>
                
                <button onclick="window.location.href='<?php echo base_url('Welcome/update/'. $post->id ); ?>'" class="updateLapor"><i class="fas fa-pen"></i>&nbsp;&nbsp;Update Laporan</button>
            <?php endforeach; ?>
            
            <br><br><br>
        </div>
    </div>
</body>
</html>
