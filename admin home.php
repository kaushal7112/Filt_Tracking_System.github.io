<?php
	include 'logincheck.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>FILE TRACKING SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	
}
body{
	background: #262626;
	background-size: cover; 
	align-items: center;
	display: flex;
	text-align: center;
}


.container-1{
	width: 114%;
	height: 72px;
    background: #392b58;
}
.menu-1 ul{
	display: inline-flex;
	margin: 10px;
}
.menu-1 ul li{
	list-style: none;
	margin: 0 30px;
	margin-left: 25px;
	color: #b2b1b1; 
	height: 10px;
	padding: 30px 40px 20px 40px;
	text-decoration: none;
}
.logo-1 img{
	width: 40px;
	margin-top: -12px;
	margin-right: 48px;
}
.active-1{
	position: relative;
	display: inline-block;
	padding: 8px 30px 30px 20px;
	text-transform: uppercase;
	letter-spacing: 3px;
	text-decoration: none;
	overflow: hidden;
	transition: 0.01s;
	margin-top: -45px;
	text-align: center;
	color: #fff;
	font: italic;
}

.active-1 span{
	position: relative;
	padding: 25px 5px;
	margin-top: -7px;
	background-color: red;
	display: inline-block; 
	padding: 10px 20px 20px 20px;
	text-transform: uppercase;
	letter-spacing: 2px;
	text-decoration: none;
	overflow: hidden;
	transition: 0.1s;
	font-color:white;
}
.active-1 h4{
	align-items: center;
	margin-top: 4px;
	margin-left: 10px;
	margin-right: -20px;
	max-width: 180px;
	max-height: 20px;
	text-decoration: none;
	height: 8px;
	padding: -20px -10px -20px -20px; 
	margin: 4px -15px -5px -5px; 
}
.active-1:hover
{
	color: #255784;
	background: #2196f3;
	box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
	transition-delay : 0.01s;
}
.divider-1{
	background-color: red;
	height: 9px;
	margin-top: -16px;
	margin-left: 0px;
	max-width: 1450px;
}
.signup-btn-1{
	top:15px;
	right: 20px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	border: 2px solid transparent;
	border-radius: 20px;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.signup-btn-1 hr
{
	top: 28px;
	right: 20px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.signup-btn-1 span{
	display: block;
	padding: 8px 22px;
}
.banner-1{
	width: 10px;
	height: 70px;
	top: 21%;
	left: 130px;
	position: absolute;
	color: #346484;
	
}

.app-text-1{
	width: 40px;
	float: left;

}
.app-text-1 span
{	
	letter-spacing: 2px;
	color: #111;
	display: table-cell;
	animation: animate 2s linear infinite;
}	
@keyframes animate
{
	0%,100%
	{
		color: #fff;
		filter: blur(1px);
		text-shadow: 0 0 10px #00b3ff,
					 0 0 20px #00b3ff,
					 0 0 40px #00b3ff,
					 0 0 60px #00b3ff;
	}
	35%,75%
	{
		color: #111;
		filter: blur(0px);
		text-shadow: none;
	}
}
.app-text-1 span:nth-child(0)
{
	animation-delay: 0s;
}
.app-text-1 span:nth-child(1)
{
	animation-delay: 1s;
}
.app-text-1 span:nth-child(2)
{
	animation-delay: 2s;
}
.app-text-1 span:nth-child(3)
{
	animation-delay: 3s;
}
.app-text-1 h1{
	font-size: 30px;
	width: 620px;
	position: relative;
	margin-left: 20px;
}
.app-picture-1{
    width: 10%;
	float: right;
	position: absolute;
	padding-right: -60px; 
}
.app-picture-1 img{
	width: 500px;
	height: 500px;
	margin-top: -30px;
	padding-right : 100px;
    padding-left: 600PX;	
}
.si ul{
	display: flex;
	text-decoration: none;
}
.si ul li{
	position: relative;
	display: block;
	font-color:#666;
	color: #666;
	font-size: 30px;
	height: 60px;
	width: 60px;
	background: #171515;
	line-height: 60px;
	border-radius: 50%;
	margin: 360px 50px 100px 20px;
	cursor: pointer;
	transition: .5s;
	right: -200px;
	text-decoration: none;
	top: -30px;
}
.si ul li a{
	position: absolute;
	text-align: center;
	line-height: 60px;
	left: 0px;
	right: 0px;
	top:-0px;
	bottom: -0px;
	color: #808B96;
	background: #000;
	font-size: 20px;
	border-radius: 100%;
}
.si ul li:before{
	position: absolute;
	content: '';
	top: 0;
	left: 0;
	height: 100%;
	width: 100%;
	border-radius: 50%;
	z-index: -1;
	transform: scale(0.9);
	transition: .5s;
}
.si ul li:nth-child(1):before{
	background: #4267B2;
}
.si ul li:nth-child(2):before{
	background: #E1306C;
}
.si ul li:hover:before{
	filter: blur(3px);
	transform: scale(1.2);
	box-shadow: 0 0 15px #d35400;*/
}
.si ul li:nth-child(1):hover:before{
	box-shadow: 0 0 15px #4267B2;
}
.si ul li:nth-child(2):hover:before{
	box-shadow: 0 0 15px #E1306C;
}
.si ul li:nth-child(1):hover{
	color: #456cba;
	box-shadow: 0 0 15px #4267B2;
	text-shadow: 0 0 15px #4267B2;
}
.si ul li:nth-child(2):hover{
	color: #e23670;
	box-shadow: 0 0 15px #E1306C;
	text-shadow: 0 0 15px #E1306C;
}
.f4{
	top: 10px;
}
.s-1{
	top: 300px;
	left: -130px;
}


	</style>
</head>
<body>
   <i>
	<div class="container-1">
		<div class="menu-1">
			<ul>
				<li class="logo-1"><img src="diamond.png"></li>
				<li class="active-1"><span>Home</span></li>
				<a href="manage files.php"><li class="active-1">Manage Files</li></a>
				<li><a href="manage client.php" class="active-1"><h4>Manage Clients</h4></a></li>
				
				<li><a href="logout.php" class="signup-btn-1"><span>Logout<hr class="signup-btn-1" width="40px"></span></a></li>
			</ul>
		</div>
		<div class="divider-1"></div>
		<div class="banner-1">
			<div class="app-text-1">
				<h1>
					<marquee scrollamount="50" height="30" width="-700"  behavior="slide" direction="left">
						<span>
							FILE TRACKING SYSTEM
							
						</span>
					</marquee>
				</h1>
				<center>
					<h1 class="s-1">
						<font color="white">WLCOME TO ADMIN PANEL<font>
					</h1>	
				</center>
				
				<br>
				<br>
			</div>  
			<div class="app-picture-1">
				<img src="FILETRACKINGSYSTEM.jpg">
			</div>
		</div>
 	</div> 
  </i>
</body>
</html>