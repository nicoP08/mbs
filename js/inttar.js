var tar1 = document.getElementById("tarif1");
var tar2 = document.getElementById("tarif2");
var ftar1 = document.getElementById("tf");
var ftar2 = document.getElementById("ti");

tar1.style.display = "flex";
tar2.style.display = "flex";

tar1.addEventListener("click", tff);
tar2.addEventListener("click", tif);

function tff(){
    ftar1.style.display = "block";
    ftar2.style.display = "none";
}

function tif(){
    ftar1.style.display = "none";
    ftar2.style.display = "block";
}