<?php
	include "u-logincheck.php";
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
		.design{
	width: 300px;
	height: 100px;
	background-color: #93CD5A;
	text-align: center;
	line-height: 35px;
	margin: auto;
	text-shadow: 2px 1px green;
	box-shadow: 5px 5px 7px red;
	border:5px red solid 5px yellow solid; 
}

	</style>
</head>
<body bgcolor=#DC79AA>
	<center>
	<table border="2" class="design">
		<tr>
			<TD>
				<center>Action</center>
			</TD>
			<td>
				<center>File Name</center>
			</td>
		</tr>
	<?php
		$con=mysqli_connect("localhost","root","","ft system");
		$q="select * from file where clien_id='$uid'";
		$r=mysqli_query($con,$q);
		while ($row=mysqli_fetch_array($r)) 
		{
	?>		<tr>
				<td>
					<center><a href="uploded files/<?php echo  $row['file']; ?>" download=""><img src="download icon.png" height="50px" width="50px"></center>
				</td>
				<td> 
					<center><?php echo $row['file'] ?></a><br></center>
				</td>
			</tr>
	<?php
		}
	?>
</a>


</table></center>
</body>
</html>
