function cek_kata() {
    s = document.getElementById("boxlapor").value;
    s = s.replace(/(^\s*)|(\s*$)/gi, "");
    s = s.replace(/[ ]{2,}/gi, " ");
    s = s.replace(/\n /, "\n");
    if (s.split(' ').length <= 20) {
        alert("Laporan harus lebih dari 20 kata..");
        return false;
    }
}
