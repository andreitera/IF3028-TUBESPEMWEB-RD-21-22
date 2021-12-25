<!DOCTYPE html>
<html>

<head>
    <title>SIMPLE LAPOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <h1>SIMPLE LAPOR !</h1>

    <div class="container">
        <div class="row content-footer">
            <div class="col text-left">Buat Laporan/Komentar</div>
        </div>


        <div class="content-create">
            <form action="#" method="POST" enctype="multipart/form-data" onsubmit="return validasi_input(this);">
                <textarea id="isilaporan" name="laporan"></textarea>
                <div class="select-container">
                    <select name="aspek">
                        <option value="">Pilih Aspek Laporan/Komentar</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur dan Pengajaran">Infrastruktur dan Pengajaran</option>
                    </select>
                </div>
                <div class="upload-container">
                    <input type="file" id="upload-btn" name="lampiran" hidden />

                    <label for="upload-btn">Choose File</label>
                    <span id="file-choosen">No File Choosen</span>

                </div>


                <div class="row content-footer">
                    <div class="col text-right">
                        <button class="btn" type="submit">Buat LAPOR!</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script type="text/javascript" src="create.js"></script>
</body>



</html>
