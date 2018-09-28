/*L1*/
var reg0 = document.getElementById("regle0");
var reg1 = document.getElementById("regle1");
var reg2 = document.getElementById("regle2");
var tar0 = document.getElementById("tarif0");
var adm1 = document.getElementById("adm1");
var adm2 = document.getElementById("adm2");
var adm3 = document.getElementById("adm3");
var adm4 = document.getElementById("adm4");
var esr = document.getElementById("esr");


reg0.addEventListener("click", regf);
adm1.addEventListener("click",admf);

function regf(){

    if (reg1.style.display == "none"){
        reg1.style.display = "flex";
        reg2.style.display = "flex";
        adm2.style.display = "none";
        adm3.style.display = "none";
        adm4.style.display = "none";
    } else if (reg2.style.display == "flex"){
        reg1.style.display = "none";
        reg2.style.display = "none";
    }
}

function admf(){
    if (adm2.style.display == "none"){
        reg1.style.display = "none";
        reg2.style.display = "none";
        adm2.style.display = "flex";
        adm3.style.display = "flex";
        adm4.style.display = "flex";
    } else if (adm2.style.display == "flex"){
        adm2.style.display = "none";
        adm3.style.display = "none";
        adm4.style.display = "none";
    }
}

/*L2*/

var cib = document.getElementById("carte");
var reb = document.getElementById("repertoire");
var ci = document.getElementById("ci");
var re = document.getElementById("re");
var ri = document.getElementById("ri");
var cr = document.getElementById("cr");
var ta = document.getElementById("ta");
var es = document.getElementById("es");
var gc = document.getElementById("gc");
var cc = document.getElementById("cc");
var mi = document.getElementById("mi");
var esp = document.getElementById("suivis");


cib.addEventListener("click", ci1f);
reb.addEventListener("click", re1f);
reg1.addEventListener("click", reg1f);
reg2.addEventListener("click", reg2f);
tar0.addEventListener("click", tarf);
esp.addEventListener("click", esp1f);
adm2.addEventListener("click",adm2f);
adm3.addEventListener("click",adm3f);
adm4.addEventListener("click",adm4f);

function ci1f(){
    ci.style.display = "inline-block";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}

function re1f(){
    ci.style.display = "none";
    re.style.display = "inline-block";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}

function reg1f(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "inline-block";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}
function reg2f(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "inline-block";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}
function tarf(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "inline-block";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}
function esp1f(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "inline-block";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}
function adm2f(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "inline-block";
    cc.style.display = "none";
    mi.style.display = "none";

    esr.style.display = "none";
}
function adm3f(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "inline-block";
    mi.style.display = "none";

    esr.style.display = "none";
}
function adm4f(){
    ci.style.display = "none";
    re.style.display = "none";
    ri.style.display = "none";
    cr.style.display = "none";
    ta.style.display = "none";
    es.style.display = "none";
    gc.style.display = "none";
    cc.style.display = "none";
    mi.style.display = "inline-block";

    esr.style.display = "none";
}

/*L3*/