
var l = 0;
function login() {
   l = setInterval(logins,0.111);
   document.getElementById("log2").style.display= "unset";

    
}
var lk = 0;
function signin(){
    lk = setInterval(loginsq,10);
    
}


var h = 0
function logins(){
    h = h + 1.5000;
    if (h > 95){
        clearInterval(l);
        document.getElementById("log1").style.display= "none";
        l = 0;
       }
    
        document.getElementById("log1").style.marginTop= "-"+h+"vh";
   
    


}
var h1 = 43
function loginsq(){
    h1 = h1 + 1;
    if (h1 == 57){
        clearInterval(lk);
        
        document.getElementById("log2").style.display= "none";
        document.getElementById("log1").style.display= "unset";
        location.reload();
    }   
      
        document.getElementById("d0").style.height= h1+"vh";
        
}

function homeop(){
    window.location.assign("index.html")
}






function contact(){
    window.location.assign("contact.html");
  }