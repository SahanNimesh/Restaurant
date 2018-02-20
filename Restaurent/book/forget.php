<!DOCTYPE html>
<html>
<head>
	<title>Forgot Your Password</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<style type="text/css">
		body{
			background: #aaa;
		}
		form{
			padding-top: 200px;
			padding-bottom: 200px;
		}
		label{
			letter-spacing: 10px;
			font-weight: bold;
		}
		input[type="submit"]{
			width: 20%;
			height: 30px;
			margin-top: 30px;
			border-radius: 10px;
			font-weight: bold;
			letter-spacing: 5px;
		}
		input[type="text"]{
			width: 16%;
		}
	</style>
</head>
<body>
	<?php
		include "../nav.php";
	?>
	<div align="center">
		<form>
			<p>
				<label>Email</label>
				<input type="text" name="email" />
			</p>
			<p>
				<input type="submit" name="submit" value="Send Password" />
			</p>
		</form>
	</div>
		
	<?php
		include "../footer.php";
	?>
</body>
</html>