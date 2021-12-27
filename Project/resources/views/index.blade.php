@extends('main')
@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home</title>
@endsection

@section('body')
    <div class="container">
        <h1>SIMPLE LAPOR!</h1>
        {{-- @dd($items[1]); --}}
        <div class="search-bar">
            <form>
                <input class="search" size="100" type="text" placeholder="Cari Laporan/Komentar" required>
                <input class="button" type="button" value="Search">
            </form>
            <div>
                <a href="/create">Buat Laporan/Komentar</a>
                <img src="{{asset('img/add.png')}}" alt="add.png" width="20" height="20">
            </div>
        </div>
        <ol>
            @foreach ($items as $item)
                <h3>{{$item["judul"]}}</h3>
                <p>{{Str::limit($item["isiLaporan"], 255)}}</p>
                <div class="jam">
                    <span href="{{asset('storage/'.$item['file'])}}"> {{class_basename($item['file'])}} </span>
                    <span>Waktu: {{$item["created_at"]}}</span>
                </div>
                <div class="tombol">
                    <button class="delete-btn" data-id="{{$item["id"]}}">Delete</button>
                    <div class="a-container">
                        <a href="/edit/{{$item["id"]}}">Ubah Laporan</a>
                        <a href="/{{$item["id"]}}">Lihat Selengkapnya></a>
                    </div>

                </div>

            @endforeach
        </ol>

        {{$items->links()}}
    </div>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        window.addEventListener('click', (e) => {
            if (e.target.classList.contains('delete-btn')) {
                const btn = e.target;
                $.ajax({
                    type: 'DELETE',
                    url: `/${btn.dataset.id}`,
                    success: function (res) { 
                        if (res.success) {
                            location.reload();
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

{{--  --}}