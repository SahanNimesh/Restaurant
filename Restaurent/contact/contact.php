<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<style type="text/css">
		body{
			background-image: url("image.jpeg");
			background-size: cover;
			background-attachment: fixed;
		}
		.box table{
			width: 50%;
			padding-left: 70px;
		}
		.box table td{
			padding: 50px 0px;
		}
		input[type="text"], input[type="email"], textarea{
			width: 90%;
			border-radius: 5px;
		}
		label{
			font-size: 1.3em;
			color: #fff;
		}
		.box{
			margin: 100px 30px 100px 150px;
			width: 80%;
			background: rgba(0,0,0,0.5);
			border-radius: 10px;
		}
		input[type='submit'], input[type='reset']{
			width: 150px;
			height: 30px;
			background: rgb(250,60,0);
			margin-left: 20px;
			border-radius: 7px;
		}
		.img{
			width: 150px;
			margin-top: -70px;
		}
		.nav{
			z-index: 1000;
		}
	</style>
</head>
<body>
	<?php
		include "../nav.php";
	?>
	<br><br><br><br><br>
	<div align="center" class="box">
		<img src="img.jpg" class="img" />
		<form action="msg.php" method="POST" onsubmit="return validateTextbox();">
			<table>
				<tr>
					<td>
						<label>Your Name:</label>					
					</td>
					<td>
						<input type="text" name="name" id="name" />										
					</td>
				</tr>
				<tr>
					<td>
						<label>Email Address:</label>					
					</td>
					<td>
						<input type="email" name="email" id="email" />										
					</td>
				</tr>
				<tr>
					<td>
						<label>Contact Number:</label>					
					</td>
					<td>
						<input type="text" name="number" id="number" />										
					</td>
				</tr>
				<tr>
					<td>
						<label>Your Message:</label>					
					</td>
					<td>
						<textarea id="message" name="message"></textarea>										
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						<input type="submit" name="submit" value="Send" />					
					</td>
					<td>
						<input type="reset" name="reset" value="Reset" />										
					</td>
				</tr>
			</table>
		</form>
	</div>	
	<?php
		include "../footer.php";
	?>
	<script type="text/javascript" src="contact.js">

	</script>
</body>
</html>