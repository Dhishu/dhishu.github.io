function iuytn(){
    window.location.assign("login.html");
  }
  function iuytn1(){
    window.location.assign("login_msg.html");
  }

  function home(){
    window.location.assign("index.html");
  }
  function contact(){
    window.location.assign("contact.html");
  }
  function mysite(){
    window.location.assign("https://www.dhishu.tk");
  }




  window.onload = function(){ 
    document.getElementById("ntyload").style.display = "none";
    document.getElementById("body1").style.display = "unset"; }




/////////////////////////////////////////////////////////
    const button1 = document.getElementById('slide2');
    const button2 = document.getElementById('slide1');
    var container = document.getElementById('container');


    var h = 1;
button1.onclick = () => {
  
 h = h + 500;
  container.scrollTo({
    top: 0,
    left: +h,
    behavior: 'smooth'
  });
};
button2.onclick = () => {
 h = h - 500
  container.scrollTo({
    top: 0,
   left: +h,
    behavior: 'smooth'
  });
};