<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>About HTML</title>
	<style>
		*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;	
}
body
{
	display: flex;
	justify-content: top;
	align-items: top;
	min-height: 100vh;
	font-family: sans-serif;
	background: #000;
}
h4
{
	letter-spacing: 2px;
	font size: 10em;
	color: #333;
	font-weight: 500;
	margin-right: -500px;
}
h4 span
{
	animation: animate 1s linear infinite;
}
h4 span:nth-child(1)
{
	animation-delay: 0s;	
}
h4 span:nth-child(2)
{
	animation-delay: 0.4s;	
}

@keyframes animate
{
	0%,80%
	{
		color: #333;
		text-shadow: none; 
	}
	100%
	{
		color: #fff;
		text-shadow: 0 0 10px #fff
				     0 0 20px #fff
				     0 0 40px #fff
				     0 0 60px #fff
			         0 0 80px #fff
		             0 0 120px #fff;	
	}
}
.active{
	position: relative;
	display: inline-block;
	padding: 30px 200px 30px 40px;
	text-transform: uppercase;
	letter-spacing: 3px;
	text-decoration: none;
	overflow: hidden;
	color: #ffc107;
	transition: 0.01s;
	margin-top: 430px;
	margin-right: 300px;
	left: -200px;
	text-align: center;
}
.active h4
{
	align-items: center;
	margin-left: -330px;
	color: #e64a19;

}
.active:hover
{
	background: #2196f3;
	box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
	transition-delay : 0.01s;
}
	</style>
</head>
<body>
   <h4>
	 <span><br><br>
	
The Main Aim Of The Project File Tracking SystemIs To Provide Flexibility To Government Departments To Maintain Huge Amount Of Pending Files. This System Will Help All Government Departments To Keep Track Of Every File. This Web Application Is Designed For Automation Of Department Of Industries. <br><br>

•	In This System, We Need To Process Files In Proper Action Should Be Taken And Necessary Permissions Are Given For The Requested Files. 
<br><br>
•	This File Is Tracking Using Numbers.
<br><br>
•	This File Is Track Authorized User.
<br><br>
     </span><span>
	Benefits:
<br><br>
•	Easy File Tracking
<br><br>
•	Restricted Access
<br><br>
•	Person Independent Processes
<br><br>
•	Senior Management Control
<br><br>
•	Web Access Manager
<br><br>
  </h4>
  <li><a href="FILE TRACKING SYSTEM.php" class="active"><h4>Click to return</h4></a></li>
</body>
</html>