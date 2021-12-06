@extends('layout/template')
@section('content')

<div class="container">
    <header>
        <h1>SIMPLE LAPOR!</h1>
    </header>
    <p>Buat Laporan/Komentar</p>
    <hr>
    {{-- <form action="/" method="post" enctype="multipart/form-data" onSubmit="validasi()" name="createLapor"> --}}
    <form action="/" method="post" enctype="multipart/form-data" name="createLapor">
        @csrf
        <div class="input-nama">
            <input type="text" id="nama" name="nama" placeholder="Masukan Nama Pelapor.." class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama')}}">

            @error('nama')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>

        <div>
            <textarea id="isi" name="isi" rows="3" required class="form-control @error('isi') is-invalid @enderror" value="{{ old('isi')}}"></textarea>

            @error('isi')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>

        <div class="pilihAspek">
            <select id="aspek" name="aspek" class="form-control @error('aspek') is-invalid @enderror" value="{{ old('aspek')}}">
                <option value="" disabled selected hidden>Pilih Aspek Pelaporan/Komentar</option>
                <option>Dosen</option>
                <option>Staff</option>
                <option>Mahasiswa</option>
                <option>Infrastruktur</option>
                <option>Pengajaran</option>
            </select>

            @error('aspek')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>

        <div class="inputLampiran">
            <input type="file" id="lampiran" name="lampiran" class="form-control @error('lampiran') is-invalid @enderror" value="{{ old('lampiran')}}">

            @error('lampiran')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>
        <div class="btn">
            <a class="btn-back" href="/">Kembali</a>
            <button class="btn-lapor" type=" submit">Buat LAPOR!</button>
        </div>
        <div class="clearfix"></div>
        <div class="hr-create">
            <hr>
        </div>
    </form>

</div>

@endSection