function reFill(){
var size = document.getElementById("sizeBorder").value;
var bred = document.getElementById("redBorder").value;
var bgreen = document.getElementById("greenBorder").value;
var bblue = document.getElementById("blueBorder").value;
var ered = document.getElementById("redEdge").value;
var egreen = document.getElementById("greenEdge").value;
var eblue = document.getElementById("blueEdge").value;
var value = document.getElementById("text");

border = "rgb("+bred+","+bgreen+","+bblue+")";
edge = ""+size+"px solid rgb("+ered+","+egreen+","+eblue+")";
value.style.backgroundColor = border;
value.style.border = edge;
}