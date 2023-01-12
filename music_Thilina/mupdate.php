<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
</head>
<style>
  body{
    width: 100%;
    height: 100vh;
    background-color: black;
    margin: 0;
    display: flex;
    justify-content: center;
  }
  .d1{
    width: 70%;
    margin-top: auto;
    border-radius: 20px;
    box-shadow: inset 0px 0px 30px wheat;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .d2{
    width: 90%;
    height: auto;
    margin-bottom: 20px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
  .d3{
    width: 100%;
    height: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .i1{
    width: 200px;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgb(77, 77, 77);
  }
  .d4{
    width: 95%;
    height: auto;
border: solid 2px red;
padding-left: 5%;
box-shadow: inset 0px 0px 30px red;
  }
  .l1{
    color: aliceblue;
    font-size: 20px;
    font-family: cursive;
  }
  .l2{
    margin-bottom: 50px;
    width: 80%;
    margin-left: 10%;
    height: 30px;
    border-radius: 10px;
    box-shadow: inset 0px 0px 40px wheat;
    border: none;
  }
  .p1{
    text-align: center;
  }
  .i2 {
    
    margin-left: 10%;
    width: 80%;
    height: 40px;
    background: transparent;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px;
    font-family: f1;
    color: aliceblue;
    margin-bottom: 30px;
  }
  .title{
    color: wheat;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande", "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    width: 300px;
    margin-top: 10px;
    margin-bottom: 80px;

  }
  .title p{
    text-align: center;
  }
  .d5{
    width: 100%;
    height: 60px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .d5 button{
    background-color: transparent;
    color: aliceblue;
    cursor: pointer;
  }
  .i3 {
    width: 80%;
    height: 40px;
    border-radius: 20px;
    box-shadow: inset 0px 0px 30px blue;
    font-size: 23px;
    font-weight: 700;
    cursor: pointer;
    margin-bottom: 30px;
    transition: 0.5s;
    margin-left: 10%;
  }
</style>
<body>
  
  <div class="d1">
    <div class="d2">
      <div class="d3">
<?php


$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");

$id = $_POST["id"];
$q = "SELECT * FROM `music` WHERE `id` = '".$id."'";
$t = $dbms->query($q);
$r= $t->fetch_assoc();
    $vlink = $r["mlink"];
    $name = $r["name"];
    $ilink = $r["ilink"];
    $id3 = $r["id"];
    echo '
        <img class="i1" src="'. $ilink .'">
      </div>
    <div class="title">
      <div class="d5">
        
        <form action="mdelete.php" method="post">
        <button name="id"  value="'.$id.'" style="color: red;" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
          <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
        </svg></button></form>
        <button style="margin-left: 40px;" onclick="st();">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-in-up-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6.364 13.5a.5.5 0 0 0 .5.5H13.5a1.5 1.5 0 0 0 1.5-1.5v-10A1.5 1.5 0 0 0 13.5 1h-10A1.5 1.5 0 0 0 2 2.5v6.636a.5.5 0 1 0 1 0V2.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5H6.864a.5.5 0 0 0-.5.5z"/>
          <path fill-rule="evenodd" d="M11 5.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793l-8.147 8.146a.5.5 0 0 0 .708.708L10 6.707V10.5a.5.5 0 0 0 1 0v-5z"/>
        </svg></button>
      </div>
      <ul>
        <li><label style="color:white;">ID_</label>' . $id . '</li>
        <li><label style="color:white;">TITLE_</label>' . $name . '</li>
        <li><label style="color:white;">MUSiC LINK_</label>' . $vlink . '</li>
        <li><label style="color:white;">THUMBNAILLINK_</label>' . $ilink . '</li>


      </ul>
    </div>
    
      <div class="d4"><form action="update.php" method="post">
        <p class="l1 p1">updates</p>
        <label class="l1">Name</label><br/>
        <input name="ti" class="l2" placeholder="' . $name . '"/>
        <br/>
        <label class="l1">Music</label><br/>
        <input name="vf" class="i2" type="file" name="video" accept="audio/*"><br>
        <label class="l1">thumbnail</label><br/>
        <input name="if" class="i2" type="file" name="video" accept="image/*"><br>
        <input class="i3" type="submit" name="upload_btn" value="updates">

</form>

      </div>
    </div>
  </div>
  <script>
    function st(){
      window.open(
        
            "http://localhost:8080/music_Thilina/music.php?video=' . $id . '", "_blank");
    }
  </script>
</body>
</html>';
?>