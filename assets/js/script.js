function validasi() {
	var form = document.forms["createForm"];

	if (form["laporan"].value == "") {
		alert("Isi tidak boleh kosong!");
		return false;
	} else if (form["laporan"].value.split(" ").length < 30) {
		alert("Minimal terdiri dari 30 kata!");
		return false;
	} else if (form["lampiran"].value == "") {
		alert("Harap lengkapi lampiran!");
		return false;
	} else if (form["aspek"].value == "kosong") {
		alert("Harap sertakan aspek!");
		return false;
	}
}
