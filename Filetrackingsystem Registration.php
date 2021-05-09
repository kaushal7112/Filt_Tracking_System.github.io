<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
		body
{
	margin: 0;
	padding: 0;
	background-size: cover;
	background-position: center;
	font-family:sans-serif;
}
.loginbox-2
{
	width: 280px;
	height: 700px;
	background: #000000b3;
	color:#fff;
	top:70%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 20px 30px;
}
.avatar
{
	width: 90px;
	height: 90px;
	border-radius: 50%;
	position: absolute;
	top: -55px;
	left: calc(85% - 50%);
}
h1{
	margin: 0;
	padding: 15px 0 20px;
	text-align: center;
	font-size: 22px;
}
.loginbox-2 p{
	margin: 0;
	padding: 0;
	font-weight: italic;
}
.loginbox-2 input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox-2 input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox-2 input[type="Submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
	transition: 0.4s ease;
}
.loginbox-2 input[type="Submit"]:hover
{
	cursor: pointer;
	background: #3EDE7C;
	color: #000;
}
.loginbox-2 input[type="radio"]
{
	margin-left: -30px;
	margin-top: -10px;
}
.loginbox-2 a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
	transition: 0.4s ease;
}
.loginbox-2 a:hover
{
	color: #ffc107;
}
.home-3
{
  position: center;
  display: inline-block;
  padding: 5px 10px 5px 10px;
  text-transform: uppercase;
  letter-spacing: 3px;
  text-decoration: none;
  overflow: hidden;
  transition: 0.001s;
  top: 0px;
  margin-left: 600px;
  text-align: center;
}
.home-3:hover
{
  color: #255784;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
  transition-delay : 0.01s;
}
	</style>
</head>
<body>
	<img src="pic-1.png" height="857px;" width="100%" position="COVER">
	<div class="loginbox-2">
		<img src="avtar-2.jpg" class="avatar">
		  	<form name="Registraction" method="POST" action="#">
		  		<h1>Registration<hr width="150"></h1>
			<input type="text" name="name" placeholder="Name" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="text" name="Address" placeholder="Address" required>
			<input type="number" name="phone" placeholder="Mo. Number" height="20px" required>
			 <tr>
    	Gender : -<br><br>
                  <label for="Male">Male :-</label>
                  	<input type="radio" id="male" name="Gender" value="Male">

                  <label for="Female">Female :-</label>
                  	<input type="radio" id="Female" name="Gender" value="Female">
        <input type="password" name="psw" placeholder="Password" required>
		 
			<input type="submit" name="btnsubmit" value="Submit">
		  	</form>
	</div>
</body>
</html>


<?php

  if (isset($_POST['btnsubmit'])) 
  {
    $nm = $_POST['name'];
    $email = $_POST['email'];
    $addres=$_POST['Address'];
    $phone = $_POST['phone'];
    $psw = $_POST['psw'];
    $gnr = $_POST['Gender'];

    $con=mysqli_connect("localhost","root","","ft system");
    if ($con) 
    {
      echo "successfully connected to database<br>";
    }
    $q="INSERT INTO clieint  VALUES('','$nm','$email','$psw','$gnr','$addres','$phone')";
    echo $q;
    $r=mysqli_query($con,$q);

    if($r) 
    {
      $q1="SELECT * FROM clieint WHERE c_email='$email';";
      $r1=mysqli_query($con,$q1);
      $row1 = mysqli_fetch_array($r1);
      $uid = $row1['client_id'];

      session_start();
      $_SESSION['clogin'] = true;
      $_SESSION['cemail']=$email;
      $_SESSION['cid']=$uid;
      $_SESSION['cname'] = $nm;
      header("location:FILE TRACKING SYSTEM.php");
     }
    else
    {
      echo "error";
    }

  }


?>