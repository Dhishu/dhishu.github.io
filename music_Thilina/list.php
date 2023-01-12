<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhishu</title>
</head>

<body>
    <div class="d1">
        <div style="width: 47%; display: flex; justify-content: flex-start;">
            <img style="width: 80px; border-radius: 50%; margin-left: 10px;" src="img/me.jpg">
        </div>
        <div style="width: 53%;">
            <h2>DISHU</h2>
        </div>


    </div>
    <div class="d2">
        <div class="d3">
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                    <path
                        d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z" />
                    <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z" />
                    <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z" />
                </svg>
                Music</button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-play-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
                </svg>
                Video</button>
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark" viewBox="0 0 16 16">
                    <path
                        d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                </svg>
                Document</button>

        </div>
        <div class="vq">
            <div class="nt1-2">
                
              <?php  //$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
                 $dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");
                 $q = "SELECT * FROM `video`";
                 $t = $dbms->query($q);
                 $n = $t->num_rows;

                 for ($x = 0; $x <$n;$x++ ){
                    $r= $t->fetch_assoc();
                    $id=($r["id"]);
                    $name=($r["name"]);
                    $i=($r["ilink"]);
                  echo '<div class="v1">
                  <form action="video.php" method="get">
                  <button name="video" value="'.$id.'" type="submit">
                      <div class="v1-1"><img src="'.$i.'"/>
                      </div>
                      <label>'.$name.'</label>
                     </button></form>
              </div>';
                }
                 
                 
                 ?></div>
                 
                 <style>
                    body{
    margin: 0;
    padding: 0;
    background-color: black;
    transition: 1s;
}
@font-face {
    font-family: f1;
    src: url(font/2sDPZGJLip7W2J7v7wQZZE1I0yCmYzzQtuZnIGaV3w.woff2);
}
.d1{
display: flex;
align-items: center;
justify-content: center;
    margin-top: 10px;
    width: 100%;
    height: 100px;
    background-color: rgb(0, 0, 0);
    box-shadow: inset 0px 0px 40px rgb(64, 64, 64);
    border-radius: 20px;
}
.d1 h2{
    text-shadow: 0px 0px 10px red;
    font-weight: 700;
    color: aliceblue;
    font-family: f1;
    font-size: 30px;
}
.d2{
        margin-top: 10px;
        width: 100%;
        height: auto;
        background-color: rgb(0, 0, 0);
        box-shadow: inset 0px 0px 40px rgb(64, 64, 64);
        border-radius: 20px;
    }
    .d3{
        display: flex;
        align-items: center;
        justify-content: center;
            margin-top: 10px;
            width: 100%;
            height: 100px;
        }
.d3 button{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-left: 2px;
    width: 90px;
    height: 80px;
    box-shadow: inset 0px 0px 10px rgb(255, 255, 255);
    border: solid 1px wheat;
    border-radius: 10px;
    background-color: transparent;
    color: aliceblue;
    cursor: pointer;
transition: 0.5s;
}        
.d3 button:hover{
    box-shadow: inset 0px 0px 10px rgb(255, 0, 0);
    border: solid 1px rgb(255, 0, 0);
color: red;
}
                    .nt1-2{

max-width: 95vw;
display: grid;
grid-template-columns: repeat(auto-fit, minmax(270px, 10fr));
grid-gap: 10px;
margin: 0 auto;
padding: 40px 0;
transition: 1s;
}
.v1{
width: 300px;
height: 260px;
}
.vq{
border-top: solid 2px rgb(84, 84, 84);
width: auto;
height: auto;
display: flex;
}
.v1-1{
width: 100%;
height: 150px;
margin-bottom: 10px;
background-color: aliceblue;
border-radius: 20px;
background-position: center;
background-size: 100%;
}
.v1 label{
color: aliceblue;
text-decoration: underline;
text-align: center;
cursor: pointer;
margin-top: 5px;
font-size: 17px;
}
.v1 button{
width: 100%;
height: 100%;
background-color: transparent;
border: none;
display: flex;
flex-direction: column;
justify-content: flex-start;
align-items: center;
cursor: pointer;
}
                    .v1-1 img{
                        height: 100%;
        width: 100%;
        border-radius: 20px;
    }
                 </style>   
                 
                

            
        
    </div>


    <script src="script.js"></script>
</body>

</html>