var d1 = document.getElementById("sd1");
var d2 = document.getElementById("sd2");
var d3 = document.getElementById("sd3");
var d4 = document.getElementById("sd4");
var d5 = document.getElementById("sd5");
//
var j1 = document.getElementById("j1");
var j2 = document.getElementById("j2");
var j3 = document.getElementById("j3");
var j4 = document.getElementById("j4");
var j5 = document.getElementById("j5");
//
var cimg1 = document.getElementById("cimg1");
var csp1 = document.getElementById("csp1");
//
var cimg2 = document.getElementById("cimg2");
var csp2 = document.getElementById("csp2");
//
var cimg3 = document.getElementById("cimg3");
var csp3 = document.getElementById("csp3");
//
var cimg4 = document.getElementById("cimg4");
var csp4 = document.getElementById("csp4");
//
var cimg5 = document.getElementById("cimg5");
var csp5 = document.getElementById("csp5");
//
var cimg6 = document.getElementById("cimg6");
var csp6 = document.getElementById("csp6");
//
var st = 1;
w = setInterval(stys,500);

//....................................//

//SIDE SHOW
function stys(){
  
  if (st == 1){
    j5.style.display="none";
    document.getElementById("ss1q").style.backgroundSize= "0px";
    d1.style.width="100%";
    j1.style.display="flex";
  } 
  st = st + 1;
  if (st == 10){
    j1.style.display="none";
    j2.style.display="flex";
    d1.style.marginLeft="100%";
    d2.style.width="100%";
    d2.style.height="400px";
    d5.style.backgroundSize="280px";
  } 
  if (st == 20){
    j2.style.display="none";
    j3.style.display="flex";
    d1.style.width="0%";
    d2.style.height="0px";
    d3.style.width="100%";
    d1.style.marginLeft="0%";
  }
  if (st == 30){
    j3.style.display="none";
    j4.style.display="flex";
    d3.style.width="0px";
      d4.style.width="100%";
  }
  if (st == 40){
    j4.style.display="none";
    j5.style.display="flex";
    d4.style.width="0px";
      d5.style.width="100%";
  }
  if (st == 49){
    d5.style.backgroundSize="0px";
    document.getElementById("ss1q").style.backgroundSize= "280px";

  }
  if (st == 50){
      d5.style.width="0%";
      
      st = 1;
      
  }


}
//....................................//

//card animation
//.....1
var mn = 0;
function mec(){
  if (mn == 0){
  cimg1.style.width= "0px";
  csp1.style.fontSize="0px";
  mn = 1;
}}
function mecl(){
  if (mn == 1){
  cimg1.style.width= "70%";
  csp1.style.fontSize="unset";
  mn = 0;
}}
//.....2
var mn2 = 0;
function jjjj(){
  if (mn2 == 0){
  cimg2.style.width= "0px";
  csp2.style.fontSize="0px";
  mn2 = 1;
}}
function jjjjj(){
  if (mn2 == 1){
  cimg2.style.width= "70%";
  csp2.style.fontSize="unset";
  mn2 = 0;
}}
//.....3
var mn3 = 0;
function mec3(){
  if (mn3 == 0){
  cimg3.style.width= "0px";
  csp3.style.fontSize="0px";
  mn3 = 1;
}}
function mecl3(){
  if (mn3 == 1){
  cimg3.style.width= "70%";
  csp3.style.fontSize="unset";
  mn3 = 0;
}}
//.....4
var mn4 = 0;
function mec4(){
  if (mn4 == 0){
  cimg4.style.width= "0px";
  csp4.style.fontSize="0px";
  mn4 = 1;
}}
function mecl4(){
  if (mn4 == 1){
  cimg4.style.width= "70%";
  csp4.style.fontSize="unset";
  mn4 = 0;
}}
//.....5
var mn5 = 0;
function mec5(){
  if (mn5 == 0){
  cimg5.style.width= "0px";
  csp5.style.fontSize="0px";
  mn5 = 1;
}}
function mecl5(){
  if (mn5 == 1){
  cimg5.style.width= "70%";
  csp5.style.fontSize="unset";
  mn5 = 0;
}}
//.....6
var mn6 = 0;
function mec6(){
  if (mn6 == 0){
  cimg6.style.width= "0px";
  csp6.style.fontSize="0px";
  mn6 = 1;
}}
function mecl6(){
  if (mn6 == 1){
  cimg6.style.width= "70%";
  csp6.style.fontSize="unset";
  mn6 = 0;
}}

//.....7
var mn7 = 0;
function mec7(){
  if (mn7 == 0){
  cimg7.style.width= "0px";
  csp7.style.fontSize="0px";
  mn7 = 1;
}}
function mecl7(){
  if (mn7 == 1){
  cimg7.style.width= "70%";
  csp7.style.fontSize="unset";
  mn7 = 0;
}}

//.....8
var mn8 = 0;
function cccc(){
  if (mn8 == 0){
  cimg8.style.width= "0px";
  csp8.style.fontSize="0px";
  mn8 = 1;
}}
function ccccc(){
  
  if (mn8 == 1){
  cimg8.style.width= "70%";
  csp8.style.fontSize="unset";
  mn8 = 0;
}}


//screll function
var kl = 0;

var rad = document.myForm.myRadios;
var prev = null;
for (var i = 0; i < rad.length; i++) {
    rad[i].addEventListener('change', function() {
        (prev) ? console.log(prev.value): null;
        if (this !== prev) {
            prev = this;
        }kl = this.value
        console.log(this.value)
    });
}
//
var he = document.getElementById("barkh");
var wsh = 0;
var wsh1 = 0;
var wsh2 = 0;
window.addEventListener('scroll',() => {
	const screlled = window.scrollY;

  if(screlled > 120){
    if (wsh == 0){
      he.style.backgroundColor = "#a1a1a1";
      wsh = 1;
    }
  }
  if(screlled < 120){
    if (wsh == 1){
      he.style.backgroundColor = "#a1a1a100";
      wsh = 0;
    }
  }
  if(screlled > 480){
    if (wsh1 == 0){
      he.style.marginLeft = "-100%";
      wsh1 = 1;
    }
  }
  if(screlled < 400){
    if (wsh1 == 1){
      he.style.marginLeft = "0%";
      wsh1 = 0;
    }
  }
  if(screlled > 600){
    if (wsh2 == 0){
      he.style.position = "unset";
      wsh2 = 1;
    }
  }
  if(screlled < 600){
    if (wsh2 == 1){
      he.style.position = "sticky";
      wsh2 = 0;
    }
  }

});



//dark & light

var klm1 = document.getElementById("klm1");
var klm2 = document.getElementById("klm2");
var klm3 = document.getElementById("klm3");
var klm4 = document.getElementById("klm4");
var klm5 = document.getElementById("klm5");
var klm6 = document.getElementById("klm6");
var klm7 = document.getElementById("klm7");
var klm8 = document.getElementById("klm8");

var face1 = document.getElementById("face1");
var face2 = document.getElementById("face2");
var face3 = document.getElementById("face3");
var face4 = document.getElementById("face4");
var face5 = document.getElementById("face5");
var face6 = document.getElementById("face6");
var face7 = document.getElementById("face7");
var face8 = document.getElementById("face8");


var syt = 0;
var body = document.getElementById("body");
function kls2(){
  if (syt == 0){
  body.style.backgroundColor = "black";
  document.getElementById("search").style.backgroundColor = "black";
  document.getElementById("hsw2").src ="images/pngwing.com (46).png"
  body.style.color = "white"
  document.getElementById("d2-1").style.boxShadow = "inset 0px 0px 100px 100px rgb(0, 0, 0)";
  document.getElementById("d2-1").style.backgroundColor = "black";
  document.getElementById("d1-2").style.borderColor = "#11ff00";
  klm7.style.boxShadow = "0 15px 60px rgba(255, 255, 255, 0.758)";
  //card 1
  face1.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face2.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face3.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face4.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face5.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face6.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face7.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";
  face8.style.backgroundImage = "linear-gradient(40deg, #000000 0%, #5eff00 45%, #000000 100%)";



  klm1.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm2.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm3.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm4.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm5.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm6.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm7.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";
  klm8.style.boxShadow = "0 7px 12px rgba(255, 255, 255, 0.758)";

  klm1.style.backgroundColor = "black";
  klm2.style.backgroundColor = "black";
  klm3.style.backgroundColor = "black";
  klm4.style.backgroundColor = "black";
  klm5.style.backgroundColor = "black";
  klm6.style.backgroundColor = "black";
  klm7.style.backgroundColor = "black";
  klm8.style.backgroundColor = "black";


  //menu
  document.getElementById("cder").style.backgroundColor = "white";
  document.getElementById("cder1").style.backgroundColor = "white";
  document.getElementById("cder2").style.backgroundColor = "white";
  
  //search
  document.getElementById("search-input").style.color = "white";


  syt = 1;
}
}

function kls1(){
  
  if (syt == 1){
  body.style.backgroundColor = "unset";
  body.style.color = "black";
  document.getElementById("search").style.backgroundColor = "white";
  document.getElementById("d2-1").style.boxShadow = "inset 0px 0px 100px 100px rgb(255, 255, 255)";
  document.getElementById("d2-1").style.backgroundColor = "#77ff00";
  document.getElementById("d1-2").style.borderColor = "#29bfff";
  //card 1
  face1.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face2.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face3.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face4.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face5.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face6.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face7.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  face8.style.backgroundImage = "linear-gradient(40deg, #ffffff 0%, #bbdbff 45%, #ffffff 100%)";
  document.getElementById("hsw2").src ="images/pngwing.com (32).png"



  klm1.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm2.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm3.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm4.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm5.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm6.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm7.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";
  klm8.style.boxShadow = "0 15px 60px rgba(0, 0, 0, 0.5)";


  klm1.style.backgroundColor = "white";
  klm2.style.backgroundColor = "white";
  klm3.style.backgroundColor = "white";
  klm4.style.backgroundColor = "white";
  klm5.style.backgroundColor = "white";
  klm6.style.backgroundColor = "white";
  klm7.style.backgroundColor = "white";
  klm8.style.backgroundColor = "white";
  
  //menu
  document.getElementById("cder").style.backgroundColor = "black";
  document.getElementById("cder1").style.backgroundColor = "black";
  document.getElementById("cder2").style.backgroundColor = "black";

  //search
  document.getElementById("search-input").style.color = "black";

  
  syt = 0;
}
}






