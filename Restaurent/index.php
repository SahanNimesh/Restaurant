<!DOCTYPE html>
<html>
<head>
	<title>Phoenixxx Restaurent</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.heading{
			animation-name: head;
			animation-duration: 4s;
		}
		@keyframes head{
			from{
				margin-top: 80px;
				color: rgba(0,0,255,0.1);
			}
			to{
				margin-top: 34px;
				color: rgba(0,0,0,1);
			}
		}
		.underline1{
			animation-name: hr;
			animation-duration: 4s
		}
		@keyframes hr{
			from{
				margin-right: 0px;
			}
			to{
				margin-right: 631px;
			}
		}
		.final{
			text-align: center;
			height: 500px;
			margin: 0px 0px 100px 0px;
		}
		.final img{
			width: 70%;
			height: 300px;
		}
		.final .ele .sub{
			font-size: 12px;
			text-align: left;
			font-weight: bold;
		}
		.final .ele .subsub{
			font-size: 12px;
			text-align: left;
		}
		.ele{
			float: left;
			width: 19%;
			padding-left: 10px;
		}
		.slider{
			background-image: url("image.jpg");
			background-size: cover;
			width: 100%;
			height: 500px;

			-webkit-animation: slide 20s 2s infinite;
		}
		@-webkit-keyframes slide{
			0%	  { background-image: url("image1.jpg"); }
			20%	  { background-image: url("image2.jpg"); }
			40%	  { background-image: url("image3.jpg"); }
			60%	  { background-image: url("image4.jpg"); }
			80%	  { background-image: url("image5.jpg"); }
			100%  { background-image: url("image6.jpg"); }
		}
	</style>
</head>
<body>
	<?php
	include "nav.php";
	?>
	<br><br><br><br>
	
	<h1 class="heading">Welcome To Phoenixxx Hotel</h1><br>
	<div class="slider"></div>
	<div align="center">
		<div class="box">
			<table>
				<tr>
					<td>We live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventure we can have if only we seek them with our eyes open. There are few certainties in life. Go with your best calculated hunch. Some of the best days of your life havent happened yet. Come feel the phoenixxx hotel, enjoy with us, and when leave take your beest memories in your life with you. </td>
					<td>The best and most beautiful things in the world can not be seen or even touched. They must be felt with the heart. As long as the memory of relaxing and adventure lives in your heart your life is good. Open your eyes and come notice the beauty of this wonderful world. We warmly welcome you all to Phoenixxx hotel to get the epic, most beautiful things in the world, relaxing and adventurous memories and fill your precious memories with them.</td>
				</tr>
			</table>
		</div><br><br><br><br>
		<p style="padding: 20px; background: #bbb;">Dream and Passion , led to creation of the Phoenixxx Hotel - Sri Lankan rest house in colombo. Started as a simple hotel just with a swimming pool and one building by Mr.l.d.Phoenixxx.g. With the devolopment of the hotel with the customers due to trusted services we supplied we had a great progress withing an year. With the time and with the help of our valued customers we managed to create this heaven at last.</p>
	</div><br><br><br><br><br><br><br><br><br>
	<h2>Services</h2>
	<hr class="srhr"><br><br><br><br>
	<div align="center">
			<table>
				<tr>
					<td><p style="padding-right: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p></td>
					<td><img src="image.jpg" class="dt"></td>
				</tr>
				<tr>
					<td><img src="image.jpg" class="dt"></td>
					<td><p style="padding-left: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p></td>
				</tr>
				<tr>
					<td><p style="padding-right: 20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software</p></td>
					<td><img src="image.jpg" class="dt"></td>
				</tr>
			</table>
		
	</div>
	<div class="final">
		<h2>HIGHLIGHTS</h2>
		<hr style="width: 10%; margin-bottom: 50px;">
		<div class="ele">
			<p class="sub">Phoenixxx shops</p>
			<p class="subsub">Discover exclusive souvenirs and gifts inspired by phoenixxx aesthetic.</p>
			<img src="image.jpg" class="final-img" />
		</div>
		<div class="ele">
			<p class="sub">Phoenixxx Bar</p>
			<p class="subsub">Relish the finest in wining and dining while you explore the region.</p>
			<img src="image.jpg" class="final-img" />
		</div>
		<div class="ele">
			<p class="sub">Capture your shots</p>
			<p class="subsub">Operating hours will be from nine in the morning to nine in the evening.</p>
			<img src="image.jpg" class="final-img" />
		</div>
		<div class="ele">
			<p class="sub">Meditating areas</p>
			<p class="subsub">To a mind that is still, the whole universe surrenders. Explore our meditating areas.</p>
			<img src="image.jpg" class="final-img" />
		</div>
		<div class="ele">
			<p class="sub">Phoenixxx spar</p>
			<p class="subsub">Time spent with nature heals your body, mind and spirit. Feel our Phoenixxx spar.</p>
			<img src="image.jpg" class="final-img" />
		</div>
	</div>
	<hr style="margin-top: 150px;">
	<?php
		include "footer.php";
	?>
</body>
</html>
