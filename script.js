var f = 1;
function st() {

    //
    //
    //document.getElementById("phicon").style.display = "none";
    f = f + 1
    if (f == 2) {
        document.getElementById("ki9").style.visibility = "visible";
    }
    if (f == 110) {
        clearInterval(w);
        w = 0;


    }
    document.getElementById("phicon").style.marginTop = "-" + f + "px";
    document.getElementById("phicon").style.marginTop = "-" + f + "px";

}
var w = 0;
var b = 0;
function stn() {

    w = setInterval(st, 0.1);
    b = setInterval(nu, 5);



    document.getElementById("ki9").style.position = "unset";


}
var n = 1;
function nu() {

    n = n + 0.5
    if (n == 30) {
        clearInterval(b);

    }
    document.getElementById("b1").style.fontSize = +n + "px";
    document.getElementById("b2").style.fontSize = +n + "px";
    document.getElementById("b3").style.fontSize = +n + "px";

}
var ns = 0;
function nyt() {

    ns = setInterval(nytr, 5);
}


var m = -110;
function nytr() {
    m = m + 1;
    if (m == -100) {
        document.getElementById("ki9").style.visibility = "hidden";
        document.getElementById("phicon").style.visibility = "visible";
        document.getElementById("ki9").style.position = "absolute";
    }
    if (m == 0) {
        clearInterval(ns);
        location.reload();

    }
    document.getElementById("phicon").style.marginTop = m + "px";

}
var ik = 0;

function kt() {var bu = document.getElementById("bu").style;
    bu.backgroundColor = "red";
}
function sto() {
    bu.backgroundColor = "rgb(1, 255, 44)";
}

var inm = 1;
function mm() {
    //alert("jjjjjjj")
    ik= setInterval(mms,2);
}
function mms(){
inm = inm + 1;
if(inm==40){
    document.getElementById("lok").style.display = "none";
    clearInterval(ik);
}
}