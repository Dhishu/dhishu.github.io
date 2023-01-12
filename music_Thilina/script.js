var q1 = document.getElementById("q1");
var q2 = document.getElementById("q2");
var q3 = document.getElementById("q3");
var q4 = document.getElementById("q4");

var m1 = document.getElementById("m1");
var m2 = document.getElementById("m2");

var p1 = document.getElementById("p1");
var p2 = document.getElementById("p2");
var p3 = document.getElementById("p3");
var p4 = document.getElementById("p4");

var n1 = 0;
var n2 = 0;
var n3 = 0;
var n4 = 0;
function v1() {
    if (n1 == 0) {
        q1.setAttribute("d", "M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z");
        n1 = 1;
        m1.play();
        p1.style.animationName="move";
        p1.style.textShadow= "0px 0px 10px red";
    }
    else {
        q1.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n1 = 0;
        m1.pause();
        p1.style.animationName="none";
        p1.style.textShadow= "none";
    }
    if (n2 == 1) {
        q2.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n2 = 0;
        m2.pause();
        p2.style.animationName="none";
        p2.style.textShadow= "none";
    }
    if (n3 == 1) {
        q3.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n3 = 0;
        m3.pause();
        p3.style.animationName="none";
        p3.style.textShadow= "none";
    }
    if (n4 == 1) {
        q4.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n4 = 0;
        m4.pause();
        p4.style.animationName="none";
        p4.style.textShadow= "none";
    }
}
function v2() {
    if (n2 == 0) {
        q2.setAttribute("d", "M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z");
        n2 = 1;
        m2.play();
        p2.style.animationName="move";
        p2.style.textShadow= "0px 0px 10px red";
       
    }
    else {
        q2.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n2 = 0;
        m2.pause();
        p2.style.animationName="none";
        p2.style.textShadow= "none";
    }
    if (n1 == 1) {
        n1 = 0;
        m1.pause();
        p1.style.animationName="none";
        p1.style.textShadow= "none";
        q1.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
    }
    if (n3 == 1) {
        n3 = 0;
        m3.pause();
        p3.style.animationName="none";
        p4.style.textShadow= "none";
        q3.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
    }
    if (n4 == 1) {
        n4 = 0;
        m4.pause();
        p4.style.textShadow= "none";
        p4.style.animationName="none";
        q4.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
    }
}
function v3() {
    
    if (n3 == 0) {
        q3.setAttribute("d", "M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z");
        n3 = 1;
        m3.play();
        p3.style.animationName="move";
        p3.style.textShadow= "0px 0px 10px red";

    }
    else {
        q3.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n3 = 0;
        m3.pause();
        p3.style.animationName="none";
        p3.style.textShadow= "none";
    }
    if (n2 == 1) {
        q2.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n2 = 0;
        m2.pause();
        p2.style.animationName="none";
        p2.style.textShadow= "none";
    }
    if (n1 == 1) {
        q1.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n1 = 0;
        m1.pause();
        p1.style.animationName="none";
        p1.style.textShadow= "none";
    }
    if (n4 == 1) {
        q4.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n4 = 0;
        m4.pause();
        p4.style.animationName="none";
        p4.style.textShadow= "none";
    }
}
function v4() {
    
    if (n4 == 0) {
        q4.setAttribute("d", "M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z");
        n4 = 1;
        m4.play();
        p4.style.animationName="move";
        p4.style.textShadow= "0px 0px 10px red";
    }
    else {
        q4.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n4 = 0;
        m4.pause();
        p4.style.animationName="none";
        p4.style.textShadow= "none";
    }
    if (n2 == 1) {
        q2.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n2 = 0;
        m2.pause();
        p2.style.animationName="none";
        p2.style.textShadow= "none";
    }
    if (n1 == 1) {
        q1.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n1 = 0;
        m1.pause();
        p1.style.animationName="none";
        p1.style.textShadow= "none";
    }
    if (n3 == 1) {
        q3.setAttribute("d", "M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z");
        n3 = 0;
        m3.pause();
        p3.style.animationName="none";
        p3.style.textShadow= "none";
    }
}
