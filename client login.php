<!DOCTYPE html>
<html>
<head>
	<title>Client Login</title>
	<style>
		body
{
	margin: 0;
	padding: 0;
	background: url(kaushal-3.jpg);
	background-size: cover;
	background-position: center;
	font-family:sans-serif;
}
.loginbox
{
	width: 320px;
	height: 420px;
	background: #000000b3;
	color:#fff;
	top:50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.avatar
{
	width: 90px;
	height: 90px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(85% - 50%);
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: italic;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox input[type="Submit"]
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
.loginbox input[type="Submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
	transition: 0.4s ease;
}
.loginbox a:hover
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
	<div class="loginbox">
		<img src="avatar.png" class="avatar">
		  <h1>Client Login<hr width="150"></h1>
		  	<form name="client Login" method="POST" action="#">
		  		<p>Username:-</p>
		  		<input type="text" name="id" placeholder="Username" required>
		  		<p>Password:-</p> 
		  		<input type="password" name="psw" placeholder="Password" required>
		  		<input type="Submit" name="btnlog" value="Login" />
		  		<a href="#">Forgat your password</a>
		  		<a href="Filetrackingsystem Registration.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't have an account</a>
		  	</form>
	</div>
</body>
</html>

<?php
    if (isset($_POST['btnlog'])) 
    {
      $id=$_POST['id'];
      $pass=$_POST['psw'];

      $con=mysqli_connect("localhost","root","","ft system");
      $q="SELECT * FROM clieint WHERE c_email='$id' AND c_pass='$pass';";
      $r=mysqli_query($con,$q);
      $row=mysqli_num_rows($r);
      $row1 = mysqli_fetch_array($r);
      $uid = $row1['client_id'];

      if ($row>=1) 
      { 
            session_start();
            $n = $row1['c_name'];
            $_SESSION['id']=$id;
            $_SESSION['uid']=$uid;
            $_SESSION['clogin'] = true;
            $_SESSION['name'] = $n;
            header("location:FILE TRACKING SYSTEM.php"); 
      }

      else 
      {
    ?>
        <script type="text/javascript">
          alert("Invalid Username or Password");
        </script>
    <?php
      }
      
    }
   ?>