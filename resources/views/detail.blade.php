@extends ('layout/main')
<!DOCTYPE html>
<html lang="en">
    <head>
        @section ('head')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIMPLE LAPOR!</title>
        <link rel="stylesheet" type="text/css" href="style_detail.css">
        @endsection
    </head>
    <body>
        @section ('container')
        <div class="container">
            <h1>SIMPLE LAPOR!</h1>
            <br><br>
            <h4>Detail Laporan/Komentar</h4>
            <hr>
            <br>
            {{-- Add Paragraph here --}}
            <br>
            <h4>Lampiran :</h4>
            <br>
            <br><br><br>

            <p>Waktu:</p> 
            <p>Infrastruktur:</p>
            <a href="" ><h4>Hapus Laporan/Komentar</h4></a>
        </div>
        @endsection
    </body>
</html>