<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$message = $_POST['message'];


	$connection = mysql_connect("localhost", "root", "");
	if(!$connection){
		echo "Database connection was unsuccessful!!!<br>";
	}else{
		echo "Datavase connection is successful!!!<br>";
	}

	$select = mysql_select_db("restaurant", $connection);
	if (!$select) {
		echo "Database selection was unsuccessful<br>";
	}else{
		echo "Database is selected<br>";
	}

	$query = mysql_query("INSERT INTO contact (`name`, `email`, `number`, `message`) values ('$name','$email','$number','$message')");
	if(!$query){
		echo "Data entering is unsuccesful";
	}else{
		echo "Data is successfuly entered to the datavase";
	}

	mysql_close();
?>