<h1> 
    Sampaikan Laporan Anda !
</h1>

<form action="/lapor" method="post" class="form-lapor">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <p>Pilih Tipe Laporan</p>
    <div class="d-flex mb-5">
         {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1401"> Pengaduan                            
         {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1402"> Aspirian                            
         {{-- class="form-type-lapor" --}} <input type="radio" name="type_laporan" name="laporan_type_id" value="1403"> Permintaan Informasi 
    </div>

    <input type="text" placeholder="ketik Judul laporan Anda*" name="title" class="form-text-box">
    {{-- @include('component.inputAlert', ['name' => 'title']) --}}

    <textarea name="laporan" id="" placeholder="Ketik Isi Laporan Anda" class="form-text-box" rows="5"></textarea>
    {{-- @include('component.inputAlert', ['name' => 'laporan']) --}}

    {{-- onfocus="(this.type='date')" --}}<input type="date" placeholder="Tanggal Kejadian*" name="tgl_kejadian" class="form-text-box">
    {{-- @include('component.inputAlert', ['name' => 'tgl_kejadian']) --}}

    <select name="location" id="" class="form-text-box" style="width: 99%">
        <option value="" disabled selected>Lokasi Kejadian</option>
        @foreach ($listLokasi as $city)
            <option value="{{$city->id}}">{{ucwords($city->name)}}</option>
        @endforeach
    </select>
    {{-- @include('component.inputAlert', ['name' => 'location']) --}}

    <select name="instansi_tujuan" id="" class="form-text-box" style="width: 99%">
        <option value="" disabled selected>Instansi Tujuan</option>
        @foreach ($listInstansi as $instansi)
            <option value="{{$instansi->id}}">{{ucwords($instansi->name)}}</option>
        @endforeach
    </select>
    {{-- @include('component.inputAlert', ['name' => 'instansi_tujuan']) --}}

    <select name="category" id="" class="form-text-box" style="width: 99%">
        <option value="" disabled selected>Pilih Kategori Laporan Anda</option>
        @foreach ($listKategori as $kategori)
            <option value="{{$kategori->id}}">{{ucwords($kategori->name)}}</option>
        @endforeach
    </select>
    {{-- @include('component.inputAlert', ['name' => 'category']) --}}

    <hr style="width: 99%">

    <div class="d-flex space-bettwen">
        <div class="file">
            <span>Lampiran</span>
            <input type="file" name="lampiran" id="">
        </div>
        <div class="send">
            <div class="d-flex input-submit">
                <input type="radio" name="anonim" id="" value="1" class="radio-subs"><span class="radio-sub">Anonim</span>
                <input type="radio" name="anonim" id="" value="0" class="radio-subs"><span class="radio-sub">Rahasia</span>
                <input type="submit" value="Lapor!" class="btn-lapor">
            </div>
        </div>
    </div>
</form>