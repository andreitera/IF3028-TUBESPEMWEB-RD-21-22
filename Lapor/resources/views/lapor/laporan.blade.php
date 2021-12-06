@extends('layout/template')
@section('content')

<div class="container">
    <a href="/lapor">
        <header>
            <h1>SIMPLE LAPOR!</h1>
        </header>
    </a>

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
                {{-- <p class="isi"><?= $k['isi']; ?></p> --}}
                <p class="isi">{{$k->isi}}</p>

                <div class="clearfix"></div>
                {{-- <span class="lampiran">Lampiran: <?= $k['lampiran']; ?></span> --}}
                <span class="lampiran">Lampiran: {{$k->lampiran}} </span>

                {{-- <a class="detail" href="/lapor/<?= $k['id']; ?>" class="btn btn-primary">Lihat Selengkapnya →</a> --}}
                <a class="detail" href="/{{$k->id}}" class="btn btn-primary">Lihat Selengkapnya →</a>

                {{-- <span class="waktu">Waktu: <?= $k['created_at']; ?></span> --}}
                <span class="waktu">Waktu: {{$k->created_at}}</span>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    @endforeach

    {{-- <?= $pager->links('lapor', 'lapor_pagination'); ?> --}}

</div>

@endSection