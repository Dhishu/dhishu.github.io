<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Done</title>
</head>
<style>
  body{
    width: 100%;
    height: 100vh;
    margin: 0;
    background-color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }
  .d1{
    width: 70%;
    height: 300px;
    border-radius: 20px;
    box-shadow: inset 0px 0px 30px lawngreen;
    color: lawngreen;
    text-shadow: 0px 0px 10px red;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 30px;
  }
</style>
<body>
  <div class="d1">
<?php
//video
$name = $_POST["vname"];

$info = pathinfo($_FILES['video']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$name.".$ext; 

$target1 = 'mp4/'.$newname;
move_uploaded_file( $_FILES['video']['tmp_name'], $target1);

// img
$info = pathinfo($_FILES['img']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$name.".$ext; 

$target2 = 'img/'.$newname;
move_uploaded_file( $_FILES['img']['tmp_name'], $target2);

//$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
$dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");
$q = "INSERT INTO `video`(`name`,`vlink`,`ilink`) VALUES
('".$name."','".$target1."','".$target2."')";
$dbms->query($q);
echo '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="lawngreen" class="bi bi-check-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>';
?></div>
</body>
</html>