<?php
$un = $_POST["un"];
$pw = $_POST["pw"];


//$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
$dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");
$q = "SELECT * FROM `user` WHERE `un` = '".$un."'";
$t = $dbms->query($q);
$n = $t->num_rows;

if($n == 0){
    echo "<h2>try agin!</h2>";
    header("Location: http://localhost:8080/music_Thilina/admin.html");
}
else{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Done</title>
    </head>
    <style>@font-face {
            font-family: f1;
            src: url(font/2sDPZGJLip7W2J7v7wQZZE1I0yCmYzzQtuZnIGaV3w.woff2);
          }
      body{
        font-family: f1;
        background-color: black;
      }
      p{font-family: f1;
      }
      .d1{
        width: 90%;
        height: 400px;
        border-radius: 20px;
        box-shadow: inset 0px 0px 30px rgb(4, 252, 0);
        font-size: 30px;
        text-shadow: 0px 0px 10px red;
        overflow-y: scroll;
        overflow-x: hidden;
        
      }
      .d1::-webkit-scrollbar {
        width: 1em;
      }
       
      .d1::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(255, 33, 33, 0.3);
      }
       
      .d1::-webkit-scrollbar-thumb {
        border-radius: 30px;
        background-color: #38383800;
        box-shadow: inset 0px 0px 10px rgb(4, 252, 0);
      }
    
      .w1{
        max-width: 95vw;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 10fr));
    grid-gap: 10px;
    margin: 0 auto;
    padding: 40px 0;
    transition: 1s;
    padding: 5%;
      }
      .w3{
        display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 10fr));
    grid-gap: 10px;
    margin: 0 auto;
    padding: 40px 0;
    transition: 1s;
    width:100%;
    height:100%;
      }
      .w2{
        width:100%;}
      .q1{
        width: 200px;
        height: 300px;
        border-radius: 20px;
        display: flex;
    flex-direction: column;
    justify-content: center;
    overflow-y: hidden;
    cursor: pointer;
    background-color: transparent;
    box-shadow: inset 0px 0px 100px wheat;
    color: aliceblue;
      }
      .q1 img{
        width: 100%;
        height: 40%;
        border-radius: 20px;
      }
      
      .bw2{
        width: 90%;
        height: auto;
        background-color: #4b4b4b;
        box-shadow: inset 0px 0px 30px #232323;
        border: none;
        border-radius: 20px;
        margin-bottom: 10px;
        color: rgb(144, 144, 144);
        margin-top: 10px;
        cursor: pointer;
        font-family: f1;
        font-size: 100%;
        padding-left: 20px;
        padding-right: 20px;
        transition: 0.5s;
      }
      .bw2:hover{
        background-color: #484848;
        box-shadow: inset 0px 0px 30px #ffffff;
        
      }
      .p1{
        margin-top: 40px;
        color: white;
        text-align: center;
        font-size: 25px;
        
    </style>
    
    <body><p class="p1">Video</p>
      <div class="d1 w1">';
      //$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
      $dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");
      $q2 = "SELECT * FROM `video`";
                 $t2 = $dbms->query($q2);
                 $n2 = $t2->num_rows;
                 for ($x = 0; $x <$n2;$x++ ){
                    $r= $t2->fetch_assoc();
                    $id=($r["id"]);
                    $name=($r["name"]);
                    $i=($r["ilink"]);
                    echo '<form class="w3" action="update.php" method="post">
        <button name="id" type="submit" value="'.$id.'" class="q1"><img src="'.$i.'">
          <label style="text-align: center;font-size: 30px;">Id_'.$id.'</label>
          <label>'.$name.'</label>
         </button>';};
       echo '</div>';
         echo '<p class="p1">Music</p><div style="padding-top: 30px; display: flex;flex-direction: column;align-items: center; " class="d1 w2">';
        $q1 = "SELECT * FROM `music`";
        $t1 = $dbms->query($q1);
        $n1 = $t1->num_rows;
        for ($y = 0; $y <$n1;$y++ ){
                            $ta= $t1->fetch_assoc();
                            $id1=($ta["id"]);
                            $name2=($ta["name"]);
                 
                          echo '<form action="mupdate.php" method="post"><button name="id" type="submit" value="'.$id1.'" class="bw2">
                          
                          '.$name2.'
                         </button></form><br/>';
    }
    echo '</div></body></html>';
        
        
        
              
                         
                         
        
              
     
      
};
?>