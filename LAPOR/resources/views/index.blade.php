<!DOCTYPE html>
<html>

<head>
  <title>SIMPLE LAPOR</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <h1>SIMPLE LAPOR !</h1>
  <div class="container center">
    <form action="{{ route('index') }}" method="GET">
      <div class="search">
        <input name="keyword" type="text" class="searchBar" placeholder="Cari disini . . .">
        <button type="submit" class="searchbtn">
          <i class="fa fa-search"></i>
          Cari
        </button>

      </div>
    </form>

    <a href="{{ route('create') }}" class="center">Buat laporan/Komentar <i class="fa fa-plus-square"></i></a>
  </div>

  <div class="container">
    <div class="row content-footer">
      <div class="col text-left">Laporan/Komentar Terakhir</div>
    </div>

    @foreach ($posts as $post)
    <div class="content">
      <div class="content-body">
        {!! nl2br(e($post->isilaporan)) !!}
      </div>
      <div class="row content-footer">

        @if($post->lampiran)
        <a href="{{ $post->lampiran }}">
          <div class="col text-left">Unduh Lampiran</div>
        </a>
        @endif
        <div class="col text-right">
          <span>Waktu : {{ $post->created_at }}</span>
          <span><a href="{{ route('show', $post->id) }}">Lihat Selengkapnya <i class="fa fa-angle-right"></i></a></span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @if(session('status'))
  <script>
    alert("{{ session('status') }}");
  </script>
  @endif
</body>


</html>
