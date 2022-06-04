<html>
<body>
<form action="/P14 2.php" method="post">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
 if(isset($_POST['SUBMIT']))
 	{
 	 echo $_POST['NAME'];
 	 echo $_POST['ROLL NO'];
 	}
?>
