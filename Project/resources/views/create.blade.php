@extends('main')


@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href={{ asset('css/create.css') }}>
    <title>Create</title>  
@endsection

@section('body')
    <div class="form-container">
        <h1>SIMPLE LAPOR!</h1>

        <h2 id="error" class="error" style=""></h2>
        <form id="create-form">
            @csrf
            <div id="judul-container">
                <p id="judul-error"  class="error" style=""></p>
                <input class="no-outline no-border" type="text" id="judul" placeholder="Buat laporan/komentar" name="judul">
            </div>
            <div id="isi-laporan-container">
                <p id="isi-error" class="error" style=""></p>
                <textarea id="isiLaporan" cols="100" rows="10" placeholder="Ketik isi dari laporan *" name="isiLaporan"></textarea>
            </div>
            <div id="kategori-laporan-container">
                <p id="kategori-error"  class="error" style=""></p>
                <select id="kategoriLaporan" name="kategoriLaporan">
                    <option value="">Pilih kategori laporan anda</option>
                    <option value="Agama">Agama</option>
                    <option value="Virus Corona">Virus Corona</option>
                    <option value="Kejahatan">Kejahatan</option>
                </select>
            </div>
            <div id="file-container">
                <p id="file-error"  class="error" style=""></p>
                <input type="file" name="fileUpload" id="fileUpload">
            </div>
            <div class="button-container">
                <input type="submit" value="Buat LAPOR!" id="lapor-btn">
            </div>
            
        </form>
    </div>
    
    
    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $('#lapor-btn').on('click', (e)=>{
            const createForm = document.getElementById('create-form');
            const data = new FormData(createForm);
            e.preventDefault();
            let isValid = true;
            console.log(data.get('fileUpload').name )
            if (!data.get('judul')) {
                const error = document.getElementById('judul-error');
                error.style.display = 'block'
                error.innerHTML  =  'Judul kosong'
                isValid =false;
            }
            if (!data.get('isiLaporan')) {
                const error = document.getElementById('isi-error');
                error.style.display = 'block'
                error.innerHTML  =  'Isi kosong'
                isValid =false;
            }
            else if (data.get('isiLaporan').length < 20) {
                const error = document.getElementById('isi-error');
                error.style.display = 'block'
                error.innerHTML  =  'Isi harus memiliki setidaknya 20 karakter'
                isValid =false;
            }
            
            if (!data.get('kategoriLaporan') ) {
                const error = document.getElementById('kategori-error');
                error.style.display = 'block'
                error.innerHTML  =  'Anda belum memilih kategori laporan'
                isValid =false;
            }
            if (!data.get('fileUpload').name) {
                const error = document.getElementById('file-error');
                error.style.display = 'block'
                error.innerHTML  =  'Anda belum menambahkan file'
                isValid =false;
            }

            if (!isValid) return;

            $.ajax({
                type: "POST",
                url: "{{ route('laporan.request.store')}}",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log(response)
                    if (response.success) {
                        window.location.replace('/')
                    }
                    else if (response.error){
                        const error = document.getElementById('error');
                        error.style.display = 'block'
                        console.log(response.error)
                        error.innerHTML  =  response.msg
                    }
                }
            });
        });
    </script>
@endsection