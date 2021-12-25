<?php defined('BASEPATH') OR exit('No direct script access allowed'); $this->load->helper('date'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/d3b9ba139c.js" crossorigin="anonymous"></script>
    <link href="../../public/css/styleHome.css" rel="stylesheet">
	<title>Halaman Home</title>
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
            <div class="search">
                <form action="<?php echo base_url(); ?>Welcome/search/" method="post">
                    <input type="text" name="keyword" placeholder="Search">
                    <button type="submit">Cari</button>
                </form>
            </div>
            
            <div class="buat">
                <a href='<?php echo base_url(); ?>Welcome/add/'><p><b>Buat Laporan / Komentar</b> &nbsp; <i class="fas fa-plus-square"></i></p></a>
            </div>

            <div class="laporan">
                <p><b>Laporan / Komentar Terakhir</b></p>
                <br><hr><br>

                <?php foreach ($posts as $post) : ?>
                    <p><b> <?php echo $post->judul; ?> </b></p><br>
					<p> <?php echo $post->laporan; ?> </p><br>
					<p> Kategori : <?php echo $post->aspek; ?> </p><br>
					<p> Lampiran : <?php echo $post->file; ?> </p><br>
                    <button class="lengkap"><a href='<?php echo base_url('Welcome/view_lapor/'. $post->id ); ?>'>Lihat Selengkapnya</a></button>
                    <p class="detail"> Waktu : <?php $unix = mysql_to_unix($post->waktu); echo unix_to_human($unix); ?> </p>
                    
                    <br><br><br><hr><br>
		<?php endforeach; ?>
                <br><br>
            </div>                          
        </div>
    </div>
</body>
</html>
