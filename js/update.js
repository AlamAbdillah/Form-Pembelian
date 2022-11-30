//date
var months = ['January','February','March','April','May','June','July','Agust','September','October','November','December'];
var myday = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var nameday = date.getDay();
    nameday = myday[nameday];
var yy = date.getYear();
var year = (yy < 1000)? yy + 1900 : yy;

var x = document.getElementById("tanggal").value = day + "-" + month + "-" + year;


var total = parseInt(document.getElementById("view_total").value);
var textarea = document.getElementsByTagName("textarea");
function add_pesanan(nama, harga){
    textarea[0].value += nama + "  @" + harga / 1000 + "k" + "\n";
    console.log(textarea[0].value);
    total += harga;
    document.getElementById("view_total").value = total;
}