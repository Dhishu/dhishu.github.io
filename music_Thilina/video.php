<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhishu</title>
    <link href="demo-template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/moovie.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>.mh a li{
  list-style: none;
  display: inline;
  margin-left: 10%;
  color: #10131a;
  
  
}
.mh{
  display: flex;
  align-items: center;
  justify-content: center;
}
.mh a{
  margin-right: 10%;
}
.lk{
  margin-left: 0px;
}
@media (max-width:700px){
  .mh a{
    margin-right: 2%;
  }
}
</style>
<body style="background-color:#10131a;">
    <div style="position: -webkit-sticky;
  position: sticky;
  top: -1px; width: 100%; height: auto; background-color: grey;">
  <ol class="mh">
    <a href="list.php">
    <li class="lk">
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
</svg>  
    Home</li></a>
    <a href="list.php">
    <li>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
  <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
</svg>  
    Video</li></a><a href="list.php">
    <li>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
</svg>
      Music</li></a><a href="upload.html">
    <li>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
</svg>
    upload</li></a>
  </ol>
  </div>

<?php
//$dbms = new mysqli("localhost", "root", "Thilina123456", "music","3306");
$dbms = new mysqli("sql8.freemysqlhosting.net", "sql8590024", "TxRTChDybp", "sql8590024","3306");

$id = $_GET["video"];
$q = "SELECT * FROM `video` WHERE `id` = '".$id."'";
$t = $dbms->query($q);
$r= $t->fetch_assoc();
    $vlink = $r["vlink"];
    $name = $r["name"];
    $ilink = $r["ilink"];
 ?>




  <!-- Page Content -->
  <div class="container">
      
    <div class="row">
      <div class="col-lg-12 text-center">
           
      
            <div class="vdiv" style='border-radius: 10px; max-width: 800px; position: relative; margin: 0 auto; margin-top: 0px; margin-top: 32px; margin-bottom: 32px;'>
                <video style="border-radius: 10px; " id="example"<?php  echo'poster="'.$ilink.'"'?> >
                <?php echo "<source src='".$vlink."' />"; ?>
                </video>
         </div><?php echo "<h4 style='color:white; text-align: center;'> ".$name."</h4>" ?>
      </div>
    </div>
  </div>
  <!-- Moovie JS Core -->
  <script src="js/moovie.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
            var demo1 = new Moovie({
              selector: "#example",
              dimensions: {
                   width: "100%"
              },
              config: {
                  storage: {
                     captionOffset: false,
                     playrateSpeed: false,
                     captionSize: false
                  }
              }
            });
    });
  </script>
  
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
                 
                 
                 ?>
     <style>            .v1-1 img{
      height: 100%;
        width: 100%;
        border-radius: 20px;
    }
    </style> 

            </div>
        </div>

</body>