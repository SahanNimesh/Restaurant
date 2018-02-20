<?php
	
	$fn = $_POST['first_name'];
	$ln = $_POST['last_name'];
	$title = $_POST['title'];
	$un = $_POST['username'];
	$pwd = $_POST['password1'];
	$email = $_POST['email'];
	$num = $_POST['number'];


	$connection = @mysql_connect("localhost","root","");
	if(!$connection){
		echo("Database is not conected!!!<br>");
	}

	$select = mysql_select_db("restaurant", $connection);
	if(!@$select){
		echo "database is not selected!!!<br>";
	}

	$query = mysql_query("INSERT INTO members (`first_name`, `last_name`, `title`, `username`, `password`, `email`, `phone`) values('$fn', '$ln', '$title', '$un', '$pwd', '$email', '$num')");
	if(!$query){
		echo "Adding query was a failure<br>";
	}

	mysql_close(@$connection);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Successfull</title>
</head>
<body style="background: linear-gradient(to bottom right, #000, #fff); height: 100%; background-repeat: no-repeat;">
	<center>
		<h1 style="color: #fff;">We will be sending you information regarding our new updates. Are you <a href="../book.php">OK</a> with it?</h1>	
	</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>