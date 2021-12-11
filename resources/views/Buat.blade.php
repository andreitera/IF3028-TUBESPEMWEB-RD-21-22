<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test1.css">
    <title>Lapor</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>SIMPLE LAPOR!</h1>
        </div>
        <div class="header-laporan">
            <h4>Buat Laporan/Komentar</h4>
            <hr>
        </div>
        <textarea id="Laporan" class="box_komentar">Laporan/Komentar</textarea >
        <select class="aspek">
        <option value="">Pilih Aspek Pelaporan/Komentar</option>
        <option value="1">1</option>
        <option value="2">2</option>   
        </select>
        <br>
        <div class="upload">
            <input type="file" ></input>
            <br>
        </div>  
        <input type="button" class="tombol" value="Buat Lapor!"></input>
    </div>
</body>
</html>