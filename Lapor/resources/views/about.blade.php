@extends('layout/template')
@section('content')

<div class="container">
    <a href="/lapor">
        <header>
            <h1>SIMPLE LAPOR!</h1>
        </header>
    </a>

    <form action="/lapor" method="post" class="search">
        <input type="text" name="cari">
        <button type="submit" name="submit"><i class="fa fa-search"></i>Cari</button>
    </form>


    <div class="wrap">
        <div class="konten">
            <span>
                <H1>
                    Tentang LAPOR!
                </H1>
            </span>
            <hr>
            <div class="p">
                <p>
                    Lapor adalah aplikasi  web seperti lapor untuk mengumpulkan laporan/komentar terkait layanan di program studi teknik informatika
                    ITERA. Lapor menerima pengaduan dalam berbagai aspek seperti Dosen, Staff, Mahasiswa, Infrastruktur dan Pengajaran.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection