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
    {{-- <?php foreach ($lapor as $k) : ?> --}}
    @foreach ($lapor as $k)
    
        <div class="wrap">
            <div class="konten">
                {{-- <p class="isi"><?= $k['isi']; ?></p> --}}
                <p class="isi"> {{$k->isi}} </p>

                <div class="clearfix"></div>
                {{-- <span class="lampiran">Lampiran: <?= $k['lampiran']; ?></span> --}}
                <span class="lampiran">Lampiran: {{$k->lampiran}} </span>


                {{-- <a class="detail" href="/lapor/<?= $k['id']; ?>" class="btn btn-primary">Lihat Selengkapnya →</a> --}}
                <a class="detail" href="/{{$k->id}}" class="btn btn-primary">Lihat Selengkapnya →</a>

                {{-- <span class="waktu">Waktu: <?= $k['created_at']; ?></span> --}}
                <span class="waktu">Waktu: {{$k->created_at}} </span>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    {{-- <?php endforeach; ?> --}}
    @endforeach

    {{-- <?= $pager->links('lapor', 'lapor_pagination'); ?> --}}

</div>

@endSection