
<!DOCTYPE html>
<html>
<head>
	<title>File Tracking System</title>
	<style>
		body{
	background: #000;
	background-size: cover; 
}
.titlepage{
	float: center;
	font-size: 40px;

}
.titlepage span
{	
	letter-spacing: 3px;
	color: #111;
	display: table-cell;
	animation: animate 1s linear infinite;
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
		color: #111;
		filter: blur(0px);
		text-shadow: none;
	}
}
.titlepage span:nth-child(0)
{
	animation-delay: 0s;
}
.titlepage span:nth-child(1)
{
	animation-delay: 2s;
}
.titlepage span:nth-child(2)
{
	animation-delay: 4s;
}
.titlepage span:nth-child(3)
{
	animation-delay: 6s;
}
.titlepage span:nth-child(4)
{
	animation-delay: 4s;
}
.titlepage hr
{
	color: #84EEBD;
	display: table-cell;
	animation: animate 1s linear infinite;
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
.d-2
{
    top:150px;
	right: 320px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.d-2 hr{
	top: 20px;
	right: -2px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.d-3
{
    top:250px;
	right: 320px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.d-3 hr{
	top: 20px;
	right: -5px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.d-4
{
    top:350px;
	right: 270px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
}
.d-4 hr{
	top: 20px;
	right: -10px;
	border: 2px solid transparent;
	border-radius: 20px;
}
.h-2
{
  position: center;
  display: inline-block;
  padding: 5px 10px 5px 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  text-decoration: none;
  overflow: hidden;
  transition: 0.001s;
  margin-top: 330px;
  margin-left: 250px;
  text-align: center;
  font-size: 20px;
}
.h-2:hover
{
  color: #255784;
  background: #2196f3;
  box-shadow: 0 0 5px #2196f3, 0 0 5px #2196f3, 0 0 10px #2196f3;
  transition-delay : 0.001s;
}
	</style>
</head>
<body>
	<center>
		<div class="titlepage">
			<span>
				File Tracking System Login
			</span>
			
		</div>
		<hr>
		<marquee scrollamount="10" height="500" width="700"  behavior="slide" direction="Up">
			<li>
				<a href="Department login.php" class="d-2">
					Admin Login<hr class="d-2" width="140px">
				</a>
			</li>
			<li>
				<a href="client login.php" class="d-3">
					Client Login<hr class="d-3" width="130px">
				</a>
			</li>
			<li>
				 <a href="Filetrackingsystem Registration.php" class="d-4">
				 	Don't have an account?<hr class="d-4" width="240px">
				 </a>
			</li>
			
	    </marquee>
		
</center>
</body>
</html>