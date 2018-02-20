<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<style type="text/css">
		.nav{
			margin-top: -100px;
		}
		.ele{
			margin-bottom: 30px;
		}
		#form{
			background: linear-gradient(to right bottom, rgba(0,0,0,0.9), rgba(0,0,0,0.1));
			margin: 100px 250px 250px 250px; 
			padding: 30px;
			color: #fff;
		}
		input{
			margin-left: 30px;
		}
		.ac_or_not{
			margin-left: 30px;
		}
		body{
			background: url("../image.jpg");
			background-size: cover;
			background-attachment: fixed;
		}
		.lgout{
			float: right;
			font-size: 20px;
			letter-spacing: 10px;
			line-height: 0px;
			color: #000;
			background: linear-gradient(rgba(255,255,255,0.2), #fff );
			height: 30px;
			margin-right: -30px;
		}
		.lgout a:hover{
			text-decoration: underline;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
	<?php
		include "../../nav.php";
		echo "<center><p style='font-size:30px; color:#fff; margin-top: 100px; margin-bottom:0px;'>Hi ".$_SESSION['username'].". Welcome to Phoenixxx hotel Reservation</p></center>";
	?>
	<div id="form">
		<form onsubmit="return validateTextbox();">
			<p class="ele">
			<input type="text" name="din" id="in" placeholder="In Date" />
			<input type="text" name="dout" id="out" placeholder="Out Date" />
			<select name='month' id="month">
				<option>Month</option>
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
			</select></p>
			<p class="ele">
				<input type="text" name="no_of_rooms" id="no_of_rooms" placeholder="Number of rooms" />	
			</p>		
			<p class="ac_or_not">A/C or non A/C</p>
			<p class="ele">
				<input type="text" name="number1" id="number1" placeholder="Number of rooms" />
				<select name="ac1" id="ac1">
					<option value="A/C">A/C</option>
					<option value="non A/C">non A/c</option>
				</select>
				<input type="text" name="number2" id="number2" placeholder="Number of rooms" />
				<select name="ac2" id="ac2">
					<option value="A/C">A/C</option>
					<option value="non A/C">non A/c</option>
				</select>
			</p>
			<p class="ele">
				<input type="text" name="nic" id="nic" placeholder="NIC / passport number" />	
			</p>
			<p class="ele">
				<input type="submit" name="submit" value="Reserve" />
			</p>
			<div class="lgout">
				<p><a href="logout.php" style="color: #000;">Log Out</a></p>		
			</div>		
		</form>
	</div>
	<?php

		$in = $_POST['in'];
		$out = $_POST['out'];
		$month = $_POST['month'];
		$no_of_rooms = $_POST['no_of_rooms'];
		$number1 = $_POST['number1'];
		$ac1 = $_POST['ac1'];
		$number2 = $_POST['number2'];
		$ac2 = $_POST['ac2'];
		$nic = $_POST['nic'];

		$conn = mysqli_connect("localhost", "root", "", "restaurant");
		if (!$conn){
			die("Connection failed".mysqli_error());
		}

	?>
	<?php
		include "../../footer.php";
	?>
	<script type="text/javascript">
		function validateTextbox(){
		var din = document.getElementById("din");
		var dout = document.getElementById("dout");
		var month = document.getElementById("month");
		var no_of_rooms = document.getElementById("no_of_rooms");
		var number1 = document.getElementById("number1");
		var ac1 = document.getElementById("ac1");
		var number2 = document.getElementById("number2");
		var ac2 = document.getElementById("ac2");
		var nic = document.getElementById("nic");

		if (din.value == ""){
			alert("Please fill the required details");
			name.focus();
			return false;
		}else if (dout.value == "") {
			alert("Please fill the required details");
			email.focus();
			return false;
		}else if (number.value == "") {
			alert("Please fill the required details");
			number.focus();
			return false;
		}else if (message.value == "") {
			alert("Please fill the required ");
			message.focus();
			return false;
		}else{
			return true;
		}
	}
	</script>
</body>
</html>