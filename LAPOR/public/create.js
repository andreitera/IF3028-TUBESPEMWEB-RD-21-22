const uploadBtn = document.getElementById("upload-btn");

const fileChoosen = document.getElementById("file-choosen");

uploadBtn.addEventListener("change", function () {
  fileChoosen.textContent = this.files[0].name;
});

function validasi_input(){
  var text = document.getElementById("isilaporan");
  var wordCount = 0;
  for (var i = 0; i <= text.length; i++) {
    if (text.charAt(i) == ' ') {
      wordCount++;
    }
  }
  if(wordCount < 20){
    alert('Minimal Lapor 20 Kata!');
    return false;
  }
   return true;
}
