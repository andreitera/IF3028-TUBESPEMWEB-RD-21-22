@extends('main')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/laporan.css')}}">
    <title>Hello World</title>
@endsection

@section('body')
    <div class="laporan-container">
        <div class="judul">
            <h1>{{$item["judul"]}}</h1>
        </div>
        <div class="isi-laporan">
            <p>{{$item["isiLaporan"]}}</p>
        </div>
    
        <div class="file-container">
            {{-- <img href="{{asset('storage/'.$item['file'])}}"> {{class_basename($item['file'])}} </img> --}}
            <img src="{{asset('storage/'.$item['file'])}}" alt="{{class_basename($item['file'])}}" width="255" height="255">
        </div>
    
        <div class="bottom">
            <div class="left">                
                <span class="waktu">Waktu : {{$item["created_at"]}}</span>
                <span class="aspek">Aspek : {{$item["kategoriLaporan"]}}</span>
            </div>
            <button class="delete-btn" data-id="{{$item["id"]}}">Delete</button>
        </div>
        {{-- <button class="test">test</button> --}}
    </div>
    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        window.addEventListener('click', (e) => {
            console.log('test')
            if (e.target.classList.contains('delete-btn')) {
                console.log('click')
                const btn = e.target;
                $.ajax({
                    type: 'DELETE',
                    url: `/${btn.dataset.id}`,
                    success: function (res) { 
                        if (res.success) {
                            window.location.replace('/')
                        }
                        if (res.error) {
                            console.log(res.error);
                        }
                    }
                })
            }
        })
    </script>
@endsection