<html>
<body>
<form  METHOD= GET>
name:<input type="text" name="name">
rollno:<input type="text" name="rollno">
<input type="submit" name="submit">
</form>
<?body>
</html>

<?php
 if(isset($_GET['SUBMIT']))
 	{
 	 echo $_GET['NAME'];
 	 echo $_GET['ROLL NO'];
 	}
?>
