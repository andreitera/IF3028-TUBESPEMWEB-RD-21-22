@extends('main')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href={{asset('css/create.css')}}>
    <title>Hello World</title>
@endsection

@section('body')
    <div class="form-container">
        <h1>EDIT</h1>
        <h2 id="error" style=""></h2>
        <form id="edit-form">
            @csrf
            <input type="hidden" name="id" value="{{$item['id']}}">
            <div id="judul-container">
                <input class="no-outline no-border" type="text" id="judul" placeholder="Ketik judul laporan anda *" name="judul" value="{{$item['judul']}}">
            </div>
            <div id="isi-laporan-container">
                <textarea id="isiLaporan" cols="100" rows="10" placeholder="Ketik isi dari laporan *" name="isiLaporan">{{$item['isiLaporan']}}</textarea>
            </div>
            <div id="kategori-laporan-container">
                <select name="kategoriLaporan" id="kategori-laporan">
                    <option value="">Pilih kategori laporan anda</option>
                    <option @if($item["kategoriLaporan"] == "Agama") selected @endif value="Agama">Agama</option>
                    <option  @if($item["kategoriLaporan"] == "Virus Corona") selected @endif value="Virus Corona">Virus Corona</option>
                    <option   @if($item["kategoriLaporan"] == "Kejahatan") selected @endif value="Kejahatan">Kejahatan</option>
                </select>
            </div>
            <div id="file-container">
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
            const createForm = document.getElementById('edit-form');
            const data = new FormData(createForm);
            e.preventDefault();
            console.log(data.get('kategoriLaporan'));
            $.ajax({
                type: "POST",
                url: "{{ route('laporan.request.update')}}",
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