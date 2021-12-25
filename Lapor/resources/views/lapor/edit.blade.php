@extends('layout/template')
@section('content')

<div class="container">

    <h1>SIMPLE LAPOR!</h1>

    <form action="/{{$lapor->id}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <div class="input-nama">
            <input type="text" id="nama" name="nama" placeholder="nama anda.." value="{{$lapor->nama}}" class="form-control @error('nama') is-invalid @enderror">

            @error('nama')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>

        <div>
            <textarea id="isi" name="isi" rows="3" class="form-control @error('isi') is-invalid @enderror" >  {{$lapor->isi}}</textarea>

            @error('isi')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>

        <div class="pilihAspek">
            <select id="aspek" name="aspek" class="form-control @error('aspek') is-invalid @enderror">

                <option selected hidden> {{$lapor->aspek}}</option>
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
            <input type="file" id="lampiran" name="lampiran" value="{{$lapor->lampiran}}" class="form-control @error('lampiran') is-invalid @enderror">

            @error('lampiran')
            <div class="invalid-feedback" >{{$message}}</div>
            @enderror
        </div>
        <div class="btn"></div>
        <a class="btn-back" href="/">Kembali</a>
        <button class="btn-lapor" type="submit">Ubah LAPOR!</button>
        <div class="clearfix"></div>
        <div class="hr-create">
            <br>
            <hr>
        </div>
    </form>

</div>

@endSection