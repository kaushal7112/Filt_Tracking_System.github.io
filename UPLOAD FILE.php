<?php
	include 'u-logincheck.php';
?>
<?php
 if (isset($_SESSION['uid'])) 
	 {
		  $uid=$_SESSION['uid'];
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.tab{
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
.tab:hover{
	background: #2ecc71;
}
		}
	</style>
</head>
<body bgcolor="litegreen">
<table border="2" align="center">
<form action="#" method="POST" enctype="multipart/form-data">
	<tr>
		<td>
			<center>Enter File Name :-</center>
		</td>
		<td>
			<center><input type="text" name="fname" required></center>
		</td>
	</tr>
	<tr>
		<td>
			<center>Select File to Upload :-</center>
		</td>
		<td>
			<center>
				<input type="file" id="myFile" name="filename" required><br>
		    	<input type="submit" name="submit-btn" value="SUBMIT" class="tab">
		    </center>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<center><a href="FILE TRACKING SYSTEM.php">Home</a>	</center>
		</td>
	</tr>

</form>
</table>

</body>
</html>


<?php
	if(isset($_POST['submit-btn']))
	{
		if (!empty($_FILES['filename']['name'])) 
		{
			$file=$_FILES['filename']['name'];
			$fname=$_POST['fname'];
			$t=date("Y-m-d  h:i:sa");
			
			$con=mysqli_connect("localhost","root","","ft system");

			$q="insert into file values('','$fname','$file','$t','$uid')";
			$r=mysqli_query($con,$q);

			if ($r) 
			{
				move_uploaded_file($_FILES['filename']['tmp_name'], "uploded file/".$file);

				echo "<script>
						alert('Successfully Uploaded');
					</script>
				";

			}
			else
			{
				echo "error!!!";
			}

		}
		else{

			echo "<script>
				alert('please select file');
			</script>";
		}
	}
?>
