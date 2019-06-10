<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<form method="post" action="form2.php">
 		Email ID <input type="email" name="email_id" placeholder="Email ID" required><br></br>
 		Password <input type="Password" name="password" placeholder="Password" required ><br></br>
 		<input type="Submit" name="Submit"><br></br>
	</form>

</body>
</html>

<?php
 if(filter_has_var(INPUT_POST,'Submit'))
 {
 	$email=$_POST['email_id'];
 	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
 	if(filter_var($email,FILTER_VALIDATE_EMAIL))
 	{
 		echo "<br>";
 		echo $email;
 		echo "<br></br>";
 		echo "Validated";
 	}
 	else
 	{
 		echo "<br>";
 		echo "Invalid Mail ID";
 	}
 } 
?>