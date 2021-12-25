@extends ('layout/main')
<!DOCTYPE html>
<html lang="en">
<head>
    @section ('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <title>Lapor</title>
    @endsection
</head>
<body>
    @section ('container')
    <div class="container">
        <div class="header">
            <div class="title">
                <h1>SIMPLE LAPOR!</h1>
            </div>
            <div class="search_bar">
                <input type="text" name="search" class="search" placeholder="Cari Laporan">
                <button type="submit" class="search_btn"> Cari </button>
            </div>
            <div class="buat_lapor">
                <a href="/buat">Buat Laporan/Komentar   </a>
            </div>
        </div>
        <div class="container-laporan">
            <!-- Contoh sebelum menggunakan data dari DB -->
            <div class="header-laporan">
                Laporan/Komentar Terakhir 
                <br>
                <hr> 
            </div>
            @foreach ($posts as $post)
            <div class="cuplikan-laporan">
                
                <div class="paragraph">
                    <p>
                       {{ $post["pesan"] }}
                    </p>
                </div>
                <div class="lampiran">
                    {{-- <img id="gambar-lampiran" src="./image/test-image-1.jpg"> --}}
                </div>
                <div class="footer-laporan">
                    <div class="nama-gambar">
                        Lampiran: {{ $post["lampiran"] }}
                    </div>
                    <div class="waktu-laporan">
                        Waktu: {{ $post["created_at"] }}
                    </div>
                    <div class="lihat-selengkapnya">
                        <a href="/detail">Lihat Selengkapnya &rarr; </a>
                    </div>
                </div>
                <hr>
                
            </div>
            @endforeach
        </div>
    </div>
    @endsection
</body>
</html>
