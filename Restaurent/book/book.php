
<!DOCTYPE html>
<html>
<head>
	<title>Book A Room</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<style type="text/css">
		body{
			background-image: url("image.jpg");
			background-attachment: fixed;
			background-size: cover;
			color: #fff;
		}
		.nav{
			margin-top: -100px;
		}
		.login{
			width: 500px;
			height: 300px;
			background: rgba(0,0,0,0.5);
			padding-top: 50px;
			margin-bottom: 70px;
		}
		.main{
			margin-top: 100px;
		}
		.p{
			padding-top: 30px;
		}
		input[type="submit"]{
			margin-top: 30px;
			width: 50%;
			height: 30px;
			font-size: 1.2em;
			font-weight: bold;
			letter-spacing: 5px;
		}

		img{
			margin-bottom: -50px;
			width: 100px;
		}
	</style>
</head>
<body>
	<?php
	include "../nav.php";
	?>
	<div align="center" class="main">
			<img src="img.ico" />
		<div class="login">
			<form action="done/logedin.php" method="POST" onsubmit="return validateTextbox();">
				<p class="p">
					<label>User Name:</label>
					<input type="text" name="username" id="username" />
				</p>
				<p class="p">
					<label>Password:</label>
					<input type="Password" name="password" id="password" />
				</p>
				<p align="right" style="font-size: 0.8em; letter-spacing: 3px;">
					<a href="forget.php">forgot Password?</a>
				</p>
				<p>
					<input type="submit" name="submit" value="Log In" />
				</p>
				<p align="right" style="font-size: 0.9em; letter-spacing: 5px;">
					<a href="register.php">Register Now</a>
				</p>
			</form>
		</div>
	</div>
	
	<?php
	include "../footer.php";
	?>
	<script type="text/javascript" src="book.js"></script>
</body>
</html>