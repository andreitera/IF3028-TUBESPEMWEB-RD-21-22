<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello World</title>
</head>
<body>
    {{-- @dd($items[1]); --}}
    <ol>
        @foreach ($items as $item)
            <h3>{{$item["judul"]}}</h3>
            <p>{{$item["isiLaporan"]}}</p>
            <a href="{{asset('storage/'.$item['file'])}}" download> {{class_basename($item['file'])}} </a>
            <span><p>Waktu: {{$item["created_at"]}}</p></span>
            <button class="delete-btn" data-id="{{$item["id"]}}">delete</button>
            <a href="/edit/{{$item["id"]}}">Ubah Laporan</a>
            <a href="/{{$item["id"]}}">Lihat Selengkapnya></a>
        @endforeach
    </ol>


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
</body>
</html>