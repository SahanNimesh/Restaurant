<?php

	$conn = mysqli_connect("localhost", "root", "", "restaurant");

	if (!$conn){
		die("Connection was failed!! Error: ".mysqli_error());
	}