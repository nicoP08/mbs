var use1 = document.getElementById("use1");
var use2 = document.getElementById("use2");
var adm1 = document.getElementById("adm1");
var adm2 = document.getElementById("adm2");
var adm3 = document.getElementById("adm3");
var adm4 = document.getElementById("adm4");

use1.style.display = "flex";
use2.style.display = "flex";
adm1.style.display = "flex";

adm1.addEventListener("click",admf);

function admf(){
    if (adm2.style.display == "none"){
    adm2.style.display = "flex";
    adm3.style.display = "flex";
    adm4.style.display = "flex";
    } else if (adm2.style.display == "flex"){
        adm2.style.display = "none";
        adm3.style.display = "none";
        adm4.style.display = "none";
    }
}
