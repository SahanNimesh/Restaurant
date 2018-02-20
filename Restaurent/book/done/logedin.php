<?php
	session_start();
	include 'dbh.php';

	$un = $_POST['username'];
	$pwd = $_POST['password'];
	$_SESSION['username'] = $un;
	$_SESSION['password'] = $pwd;

	$query = "SELECT * FROM members WHERE username='$un' AND password='$pwd'";

	$result = mysqli_query($conn, $query);

	if (!$row = mysqli_fetch_assoc($result)){
		echo "Your username or password is incorrect";
	}else{
		header("Location: reserve.php");
	}

