
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<style>
			body{
	margin: 0;
	padding: 0;
	background: url(kaushal-3.jpg);
	background-size: cover;
	font-family: sans-serif;
}
.box{
	width: 300px;
	padding: 40px;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50%);
	background:  #000000b3;
	text-align: center;
}
.box h1{
	color: white;
	text-transform: uppercase;
	font-weight: 500;
}
.box input[type="text"],.box input[type="Password"]
{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #F428EA ;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25px;
}
.box input[type="text"]:focus,.box input[type="Password"]:focus{
	width: 280px;
	border-color: #F4287B ;
}
.box input[type="Submit"]{
	border: 0;
	background: none;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #2ecc71;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25px;
	cursor: pointer;
}
.box input[type="Submit"]:hover{
	background: #2ecc71;
}
.box a{
	text-decoration: none;
	color: orange;
}
.home
{
  position: relative;
  display: inline-block;
  padding: 10px 20px 10px 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  text-decoration: none;
  overflow: hidden;
  transition: 0.01s;
  margin-top: 15px;
  text-align: center;
}
.home:hover
{
  color: #255784;
  background: #2196f3;
  box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
  transition-delay : 0.01s;
}

	</style>
</head>
<body>
	<center>
		<form class="box" name="Login" method="POST" action="#">
			<h1>Admin Login<hr></h1>
			<input type="text" name="id" placeholder="Username" required>
			<input type="password" name="psw" placeholder="Password" required>
			 <tr>
        <td colspan="3">
        	<font color="red">
        <input type="checkbox"  size="30" name="lang" required/> I Agree Terms & Condition
    </font>
        </td>
	</tr>
			
			<input type="Submit" name="btnlog" value="Login"/>
			<font size="2">
			<a href="#">Forgat your password?</a>
		  		<a href="Filetrackingsystem REgistration.php">&nbsp;&nbsp;&nbsp;Don't have an account?</a>
		  	</font>
		</form>
	</center>
</body>
</html>

<?php
    if (isset($_POST['btnlog'])) 
    {
      $id=$_POST['id'];
      $pass=$_POST['psw'];

      $con=mysqli_connect("localhost","root","","ft system");
      $q="SELECT * FROM admin WHERE adminEmail='$id' AND adminPassword='$pass';";
      $r=mysqli_query($con,$q);
      $row=mysqli_num_rows($r);

      if ($row>=1) 
      {
        session_start();
        $row = mysqli_fetch_array($r);
        $n = $row['a_name'];
        $_SESSION['login'] = true;
        $_SESSION['name'] = $n;
        header("location:admin home.php");    
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