<?php
   var_dump($_POST);
   //$check=($_POST["check"]);
?>
<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>
      <?php
        if (isset($_POST["check"]) && is_array($_POST["check"])) 
        {
            //foreach( $_POST[""] as $value )
            for()
            {
                echo "{$value} ";
                echo "<br/>";
            }
            echo("が選択されました。<br/><br/>");
        }
        else
        {
            echo("何も選択されていません。<br/><br/>");
        }

      ?>
      <a href="http://localhost/2204110005_Nishiyama/02/03/send.php">戻る</a>
    
   </body>
</html>
