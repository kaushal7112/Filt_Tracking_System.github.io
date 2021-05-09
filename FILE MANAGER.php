<?php
	include "u-logincheck.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Tracking System</title>
	<style>
		body{
	background: #000;
	background-size: cover; 
}
@keyframes animate
{
	10%,55%
	{
		color: #fff;
		filter: blur(0.30px);
		text-shadow: 0 0 10px #00b3ff,
					 0 0 15px #00b3ff,
					 0 0 20px #00b3ff,
					 0 0 25px #00b3ff;
	}
	5%,95%
	{
		color: #84EEBD;
		filter: blur(0px);
		text-shadow: none;
	}
}
a
{
	text-decoration: none;
	top: 200px;
	font-size: 25px;
	text-align: center;
	color: #fff;
}
.d-1
{
    top:50px;
	right: 320px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.d-1 hr{
	top: 20px;
	right: -5px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.d-2
{
    top:150px;
	right: 275px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.d-2 hr{
	top: 20px;
	right: -6px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.d-4
{
    top: 250px;
	right: 300px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.d-4 hr{
	top: 20px;
	right: -3px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.h-2
{
  position: center;
  display: inline-block;
  padding: 5px 5px 5px 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  text-decoration: none;
  overflow: hidden;
  transition: 0.001s;
  margin-top: 330px;
  margin-left: 280px;
  text-align: center;
  font-size: 20px;
}
.h-2:hover
{
  color: #255784;
  background: #2196f3;
  box-shadow: 0 0 5px #2196f3, 0 0 5px #2196f3, 0 0 5px #2196f3;
  transition-delay : 0.001s;
}
	</style>
</head>
<body>
	<center>
		<marquee scrollamount="25" height="" width=""  behavior="scroll" direction="left">
			<hr>
		</marquee>
		<marquee scrollamount="20" height="500" width="700"  behavior="slide" direction="Up">
			<li>
				<a href="UPLOAD FILE.php" class="d-1">
					Upload<hr class="d-1" width="80px">
				</a>
			</li>
			<li>
				<a href="DOWNLOAD FILE.php" class="d-2">
					Download/View<hr class="d-2" width="172px">
				</a>
			</li>
			<li>
				<a href="FILE TRACK.php" class="d-4">
					Track FILE<hr class="d-4" width="120px">
				</a>
			</li>
			<li>
				<a href="FILE TRACKING SYSTEM.php" class="h-2">
					<h4>
						Home<hr width="40px">
					</h4>
				</a>
		    </li>
	    </marquee>
	    <marquee scrollamount="25" height="" weight="" behavior="scroll" direction="right">
			<hr>
		</marquee>
</center>
</body>
</html>