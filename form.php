<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<form method="get" action="form.php">
 		Username <input type="text" name="Username" placeholder="Username" required><br></br>
 		Password <input type="Password" name="Password" placeholder="Password" required><br></br>
 		<input type="Submit"><br>
	</form>

</body>
</html>

<?php
 if(isset($_GET['Username']))
 {
 	echo "<br>";
 	echo $_GET['Username'];
 	echo "<br>";
 	echo $_GET['Password'];
 } 

?>