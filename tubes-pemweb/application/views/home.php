<?php defined('BASEPATH') OR exit('No direct script access allowed'); $this->load->helper('date'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
    <script src="https://kit.fontawesome.com/d3b9ba139c.js" crossorigin="anonymous"></script>
    <link href="../../public/css/styleutama.css" rel="stylesheet">
	<title>Halaman Home</title>
</head>
<body>
    <div class="container">
        <div class="atas">
            <nav>
                <div class="logo"><img src="../../public/css/file_gambar/Logo_ITERA.png" alt="logo itera" height="85px"></div>
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
            <div class="search">
                <form action="<?php echo base_url(); ?>Welcome/search/" method="post">
                    <input type="text" name="keyword" placeholder="Search">
                    <button type="submit">Cari</button>
                </form>
            </div>
            
            <div class="buat">
                <table>
                    <tr>
                        <td><p></p></td>
                        <td><a href='<?php echo base_url(); ?>Welcome/add/'><p>Buat Laporan/Komentar &nbsp; <i class="fas fa-plus-square"></i></p></a></td>
                    </tr>
                </table>
            </div>

            <div class="laporan">
                <p>Laporan/Komentar Terakhir</p>
                <hr>

                <?php foreach ($posts as $post) : ?>
					<p> <?php echo $post->laporan; ?> </p>
					<p> <?php echo $post->aspek; ?> </p>
					<p> <?php echo $post->file; ?> </p>
                    
                    <p> <?php $unix = mysql_to_unix($post->waktu); echo unix_to_human($unix); ?> </p>
                    <button class="lengkap"><a href='<?php echo base_url('Welcome/view_lapor/'. $post->id ); ?>'>Lihat Selengkapnya</a></button> 
                    <br><br><hr>
				<?php endforeach; ?>
            </div>                          
        </div>
    </div>
</body>
</html>