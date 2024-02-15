<?php

session_start();
$xxx=$_POST["xxx"];
if($xxx == "")
{
  header("Location:http://localhost/2204110005_Nishiyama/02/02/send.php");
  exit();
}

?>
<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>
      <?php
        
         echo("選択されたのは" . $xxx . "です。<br/>");

      ?>
      <a href="http://localhost/2204110005_Nishiyama/02/02/send.php">戻る</a>
    
   </body>
</html>
