<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello World</title>
</head>
<body>
    <form>
        @csrf
        <div id="judul-container">
            <input type="text" id="judul" placeholder="Ketik judul laporan anda *">
        </div>
        <div id="isi-laporan-container">
            <textarea id="isi-laporan" cols="30" rows="10" placeholder="Ketik isi dari laporan *"></textarea>
        </div>
        <div id="lokasi-kejadian-container">
            <input type="text" id="lokasi-kejadian" placeholder="Ketik lokasi kejadian *">
        </div>
        <div id="instansi-tujuan-container">
            <input type="text" id="instansi-tujuan" placeholder="Ketik instansi tujuan *">
        </div>
        <div id="kategori-laporan-container">
            <select name="kategori-laporan" id="kategori-laporan">
                <option value="">Pilih kategori laporan anda</option>
                <option value="Agama">Agama</option>
                <option value="Virus Corona">Virus Corona</option>
                <option value="Kejahatan">Kejahatan</option>
            </select>
        </div>
        <div id="tanggal-kejadian-container">
            <input type="text" id="tanggal-kejadian" placeholder="Pilih Tanggal Kejadian *">
        </div>

        <input type="submit" value="LAPOR!" id="lapor-btn">
    </form>


    <script>
        // JSON.stringfy()
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        

        
        $('#lapor-btn').on('click', (e)=>{
            const data = {
                _token: $("input[name='_token'").val(),
                'judul' : $("#judul").val(),
                'isiLaporan' : $("#isi-laporan").val(),
                'lokasiKejadian' : $("#lokasi-kejadian").val(),
                'instansiTujuan' : $("#instansi-tujuan").val(),
                'kategoriLaporan' : $("#kategori-laporan").val(),
                'tanggalKejadian' : $("#tanggal-kejadian").val(),
            }
            console.log(data);
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{ route('laporan.request.store')}}",
                data: data,
                success: function (response) {
                    console.log(response);
                }
            });
    
        });
    </script>
</body>
</html>