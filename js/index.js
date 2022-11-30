//start 
setTimeout(scroll_to_user(), 300);
function scroll_to_user(){
    document.getElementById("user").scrollIntoView();
}

//get date
var months = ['January','February','March','April','May','June','July','Agust','September','October','November','December'];
var myday = ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'];
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var nameday = date.getDay();
    nameday = myday[nameday];
var yy = date.getYear();
var year = (yy < 1000)? yy + 1900 : yy;
document.getElementsByClassName("date")[0].innerHTML = nameday + ", " + day + " " + months[month] + " " + year;
document.getElementsByClassName("date")[1].innerHTML = nameday + ", " + day + " " + months[month] + " " + year;
function add() {
    window.open("pesan.php", "_self");
}
