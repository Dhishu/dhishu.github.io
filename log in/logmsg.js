
function fty(){
    setInterval(gt,10)
}

var w = 1;
var w1 = 1;

function gt(){
    w1 = w1 + 1;
    
    if (w1 == 100){
        window.location.assign("login.html");
    }

}