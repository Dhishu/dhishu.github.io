<?php
//$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
$dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");
$id = $_POST["id"];
$q = "SELECT * FROM `video` WHERE `id` = '".$id."'";
$t = $dbms->query($q);
$r= $t->fetch_assoc();
    $vlink = $r["vlink"];
    $name = $r["name"];
    $ilink = $r["ilink"];

    unlink($vlink);
    unlink($ilink);

    $q2 = "DELETE FROM `video` WHERE `id` = '".$id."'";
$dbms->query($q2);
header("Location: http://localhost:8080/music_Thilina/admin.php");
    
?>
