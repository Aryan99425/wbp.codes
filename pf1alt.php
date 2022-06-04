<?php
echo "ARYAN THAKUR<br>";
$str = "Visit my house";
$pattern = "/my/i";
echo preg_match($pattern, $str); 
echo"<br>";

$str2 = "The rain in India falls mainly on the plains.";
$pattern2 = "/ain/i";
echo preg_match_all($pattern2, $str2);
echo"<br>";

$str3 = "Visit Microsoft!";
$pattern3 = "/microsoft/i";
echo preg_replace($pattern3, "my web page", $str3);
?>
