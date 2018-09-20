var reg1 = document.getElementById("regle1");
var reg2 = document.getElementById("regle2");
var freg1 = document.getElementById("ri");
var freg2 = document.getElementById("cr");

reg1.style.display = "flex";
reg2.style.display = "flex";

reg1.addEventListener("click", rif);
reg2.addEventListener("click", crf);

function rif(){
    freg1.style.display = "block";
    freg2.style.display = "none";
}

function crf(){
    freg1.style.display = "none";
    freg2.style.display = "block";
}