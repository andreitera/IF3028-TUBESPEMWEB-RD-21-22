


function validateForm(){
    let isi = document.forms["form"]["isi"].value;
    let aspek = document.forms["form"]["aspek"].value;
    let lampiran = document.forms["form"]["lampiran"].value;
    if (isi=="" || aspek=="" || lampiran==""){
        alert("Tidak boleh ada data yang kosong!");
    } else if (isi.split(" ").length<20){
        alert("Laporan tidak boleh kurang dari 20 kata");
    } else {
        document.getElementById("form").submit();
    }
}