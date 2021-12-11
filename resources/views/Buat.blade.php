<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Buat.css">
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
        <form>
            <textarea id="Laporan" class="box_komentar" placeholder="Laporan/Komentar"></textarea >
            <select class="aspek">
            <option value="">Pilih Aspek Pelaporan/Komentar</option>
            <option value="1">Laporan</option>
            <option value="2">Komentar</option>   
            </select>
            <br>
            <div class="upload">
                <input type="file" ></input>
                <br>
            </div>  
            <input type="submit" class="tombol" value="Buat Lapor!"></input>
        </form>
    </div>
</body>
</html>