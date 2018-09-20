//L1
var reg0 = document.getElementById("regle0");
var reg1 = document.getElementById("regle1");
var reg2 = document.getElementById("regle2");
var tar0 = document.getElementById("tarif0");
var tar1 = document.getElementById("tarif1");
var tar2 = document.getElementById("tarif2");
var adm1 = document.getElementById("adm1");
var adm2 = document.getElementById("adm2");
var adm3 = document.getElementById("adm3");
var adm4 = document.getElementById("adm4");


reg0.addEventListener("click", regf);
tar0.addEventListener("click", tarf);
adm1.addEventListener("click",admf);

function regf(){

    if (reg1.style.display == "none"){
        reg1.style.display = "flex";
        reg2.style.display = "flex";
    } else if (reg2.style.display == "flex"){
        reg1.style.display = "none";
        reg2.style.display = "none";
    }
}

function tarf(){

    if (tar1.style.display == "none"){
        tar1.style.display = "flex";
        tar2.style.display = "flex";
    } else if (tar2.style.display == "flex"){
        tar1.style.display = "none";
        tar2.style.display = "none";
    }
}

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

//L2

var ci = document.getElementById("ci");
var re = document.getElementById("re");
var ri = document.getElementById("ri");
var cr = document.getElementById("cr");
var tf = document.getElementById("tf");
var ti = document.getElementById("ti");
var gc = document.getElementById("gc");
var cc = document.getElementById("cc");
var mi = document.getElementById("mi");