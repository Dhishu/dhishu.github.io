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
    font-size: 30px;
    color: lawngreen;
    text-shadow: 0px 0px 10px red;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
</style>
<body>
  <div class="d1">
<?php
//music
$name = $_POST["mname"];
$aname = $_POST["aname"];

$info = pathinfo($_FILES['music']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$name.".$ext; 

$target1 = 'mp3/'.$newname;
move_uploaded_file( $_FILES['music']['tmp_name'], $target1);

$target2 = 'mp3/img/'.$newname;

//$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
$dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");



// img
if ($_FILES['mimg']['size'] == 0 && $_FILES['mimg']['error'] == 0)
{
  $q = "INSERT INTO `music`(`name`,`mlink`,`ilink`,`artist`) VALUES
('".$name."','".$target1."','".$target2."','".$aname."')";

$info = pathinfo($_FILES['mimg']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$name.".$ext; 


move_uploaded_file( $_FILES['mimg']['tmp_name'], $target2);

$dbms->query($q);
echo "done";  
    }
else{$q = "INSERT INTO `music`(`name`,`mlink`,`ilink`,`artist`) VALUES
    ('".$name."','".$target1."','img/me.jpg','".$aname."')";
    $dbms->query($q);
echo "save your file in img na";
    }

?></div>
</body>
</html>