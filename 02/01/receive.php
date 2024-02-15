<?php

session_start();
$message=$_POST["message"];
if($message == "")
{
  header("Location:http://localhost/2204110005_Nishiyama/02/01/send.php");
  exit();
}

?>
<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>
      <?php
        
         echo("入力されたメッセージは" . $message . "です。<br/>");

      ?>
      <a href="http://localhost/2204110005_Nishiyama/02/01/send.php">戻る</a>
    
   </body>
</html>
