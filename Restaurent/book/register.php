<!DOCTYPE html>
<html>
<head>
	<title>Registor</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<style type="text/css">
		body{
			margin: 0px;
		}
		video{
				width: 100%;
				height: 100%;
				padding-right: -50px;
		}
		.background-wrap{
			position: fixed;
			z-index: -100;
		}
		.form{
			padding-top: 100px;
			padding-bottom: 100px;
			color: #fff;
		}
		input[type="text"], input[type="password"]{
			width: 40%;
			display: block;
		}
		input[type="submit"]{
			width: 200px;
			height: 30px;
			margin-left: 70px;
			border-radius: 7px;

		}
		input[type="submit"]:hover{
			background: #000;
			color: #fff;
		}
		.p1,.p2, .p3, .p4, .p5, .p6, .p7, .p8, .p9{
			padding-left: 500px;
			padding-top: 20px;
		}
		body{
			margin: 0px;
		}
		.content{
			padding-left: 0px;
			margin-top: 100px;
			color: #fff;
			margin-bottom: 100px;
			font-family: calibri,sans-serif;
		}
		.background-wrap{
			position: fixed;
			z-index: -1000;
			width: 100%;
			height: 100;
			overflow: hidden;
			top: 0;
			left: 0;
		}
		.nav{
			margin-top: -100px;
		}
		/*animation*/
		.p1{
			animation-name: rgt;
			animation-duration: 2s;
		}
		.p2{
			animation-name: lft;
			animation-duration: 2.2s;
		}
		.p3{
			animation-name: rgt;
			animation-duration: 2.4s;
		}
		.p4{
			animation-name: lft;
			animation-duration: 2.6s;
		}
		.p5{
			animation-name: rgt;
			animation-duration: 2.8s;
		}
		.p6{
			animation-name: lft;
			animation-duration: 3s;
		}
		.p7{
			animation-name: rgt;
			animation-duration: 3.2s;
		}
		.p8{
			animation-name: lft;
			animation-duration: 3.4s;
		}
		.p9{
			animation-name: rgt;
			animation-duration: 3.6s;
		}
		@keyframes rgt{
			from{
				margin-left: -500px;
			}
			to{
				margin-left: 0px;
			}
		}
		@keyframes lft{
			from{
				margin-left: 100%;
			}
			to{
				margin-left: 0px;
			}
		}
		h1{
			animation-name: title;
			animation-duration: 4s;
		}
		@keyframes title{
			from{
				color: rgba(0,0,0,1);
				margin-top: 20px;
			}
			to{
				color: rgba(2225,225,225,1);
				margin-top: 0px;
			}
		}
		.hr{
			animation-name: hr;
			animation-duration: 4s
		}
		@keyframes hr{
			from{
				margin-left: 1000px; 
			}
			to{
				margin-left: 578px;
			}
		}
</style>
</head>
<body>
	<?php
		include "../nav.php";
	?>
	<div class="background-wrap">
		<video id="video-bgg-elem" autoplay loop>
			<source src="video.mp4" type="video/mp4" />Video not supported.
		</video>
	</div>
	<div class="content">
		<h1>
			Be a part of Phoenixxx hotel
		</h1>
		<hr style="width: 200px; margin-bottom: 100px;" class="hr">
		<form action="done/msg.php" method="POST" onsubmit="return validateTextbox();">
			<p class="p1">
				<label>First Name: </label>
				<input type="text" name="first_name" id="first_name" />
			</p>
			<p class="p2">
				<label>Last Name: </label>
				<input type="text" name="last_name"  id="last_name" />
			</p>
			<p class="p3">
				<label>Title</label>
				<input type="radio" name="title" value="Ms." id="title" />Ms. 
				<input type="radio" name="title" value="Mrs." id="title"/>Mrs. 
				<input type="radio" name="title" value="Mr." id="title"/>Mr. 
			</p>
			<p class="p4">
				<label>User Name: </label>
				<input type="text" name="username" id="username" />
			</p>
			<p class="p5">
				<label>Password</label>
				<input type="password" name="password1" id="password1" />
			</p>
			<p class="p6">
				<label>Re-enter Password</label>
				<input type="password" name="password2" id="password2" />
			</p>
			<p class="p7">
				<label>E-mail Address: </label>
				<input type="text" name="email" id="email" />
			</p>
			<p class="p8">
				<label>Mobile Mumber</label>
				<input type="text" name="number" id="number" />
			</p>
			<p class="p9">
				<input type="submit" name="submit" value="register" />
			</p>
		</form>
	</div>
	<?php
		include "../footer.php";
	?>
	<script type="text/javascript" src="register.js"></script>
</body>
</html>