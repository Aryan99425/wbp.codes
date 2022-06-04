<?php
echo "ARYAN THAKUR<br>";
 session_start();

 $_SESSION["Login"] = "Succesful";
 echo "session start<BR>";

 if(isset($_SESSION["Login"]));
 {
     print_r($_SESSION);
 }

 ?>
 
 <?php
 session_unset();
 echo "Destroy succesful";
 ?>