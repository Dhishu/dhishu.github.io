<?php
$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");

$id = $_POST["id"];
$q = "SELECT * FROM `music` WHERE `id` = '".$id."'";
$t = $dbms->query($q);
$r= $t->fetch_assoc();
    $vlink = $r["mlink"];
    $name = $r["name"];
    $ilink = $r["ilink"];

    unlink($vlink);
    unlink($ilink);

    $q2 = "DELETE FROM `music` WHERE `id` = '".$id."'";
$dbms->query($q2);
header("Location: http://localhost:8080/music_Thilina/admin.php");
    
?>
