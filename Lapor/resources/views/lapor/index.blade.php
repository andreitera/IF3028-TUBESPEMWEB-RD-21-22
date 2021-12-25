@extends('layout/template')
@section('content')

<div class="container">
    <a href="/">
        <header>
            <h1>SIMPLE LAPOR!</h1>
        </header>
    </a>

    <form action="/lapor" method="post" class="search">
        <input type="text" name="cari">
        <button type="submit" name="submit"><i class="fa fa-search"></i>Cari</button>
    </form>

    <div class="tambah">
        <a href="/tambah">Buat Laporan/Komentar <i class="fa fa-plus"></i></a>
    </div>

    <div class="wrap">
        <div class="konten">
            <span>
                Laporan/Komentar Terakhir
            </span>
            <hr>
        </div>
    </div>
    @foreach ($lapor as $k)
    
        <div class="wrap">
            <div class="konten">

                <p class="isi"> {{$k->isi}} </p>

                <div class="clearfix"></div>

                <span class="lampiran">Lampiran: {{$k->lampiran}} </span>

                <a class="detail" href="/{{$k->id}}" class="btn btn-primary">Lihat Selengkapnya →</a>

                <span class="waktu">Waktu: {{$k->created_at}} </span>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    @endforeach

</div>

@endSection