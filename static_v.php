<html>
<?php
function myfunction()
{
	static $a=23;
	echo "$a<br>";
	$a++;
	echo "$a<br>";
}
echo "ARYAN THAKUR<br>";
myfunction();
myfunction();
?>
</html>