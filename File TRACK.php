<?php
session_start();
 if (isset($_SESSION['uid'])) 
	 {
		  $uid=$_SESSION['uid'];
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="orange">
	<center>
	<table border="2" bgcolor="yellow">
	<form  action="#" method="POST">
		<tr>
			<td>
				<center><u>Enter Your File Name</u></center>
			</td>
			<td>
				<center><u>Action</u></center>
			</td>
		</tr>
		<tr>
			<td>
				<center><input type="search" name="search" placeholder="Search File"></center>
			</td>
			<td>
				<input type="submit" name="search-btn" value="SEARCH">
			</td>
		</tr>
	</form>
	</table>
	</center>
</body>
</html>
<center>
<?php
	if (isset($_POST['search-btn']))
    {
		$con=mysqli_connect("localhost","root","","ft system");

		$s=$_POST['search'];

		$q="select * from file where clien_id='$uid' AND (file_name like '%$s%' OR file like '%$s%')";

		$r=mysqli_query($con,$q);

		$n=mysqli_num_rows($r);

		if ($n==0) 
		{
			echo "No File Found!!!";
		}
		else
		{
			 echo "<table border=2>
			 <tr colspan='4'>
			 	'$n' Files Found'
			 </tr>
				<tr>
					<th>
						<u>FILE ID</u>
					</th>

					<th>
						<u>FILE NAME</u>
					</th>
					<th>
						<u>FILE</u>
					</th>
					<th>
						<u>FILE DATE</u>
					</th>
					<th>
						<u>ACTION</u>
					</th>s
				</tr>";
			


		while ($row=mysqli_fetch_array($r))
		{
?>
		<tr bgcolor="red">
			<td>
				<center><?php echo $row['file_id']; ?></center>
			</td>

			<td>
				<center><?php echo $row['file_name']; ?></center>
			</td>

			<td>
				 <center><?php 
                               $filename=$row['file'];
                                $ext=pathinfo("uploded file/$filename",PATHINFO_EXTENSION);
                                if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'jfif' ) 
                                {
                                  echo "<img src='uploded file/$filename' height='100px' width='100px' />";
                                }
                                if ($ext == 'mkv' || $ext == 'mp4' || $ext == 'webm') 
                                {
                                  echo "<video src='uploded file/$filename' width='100px' height='100px' controls></video>";
                                }
                                if ($ext == 'mp3' || $ext == 'wav' || $ext == 'ogg' || $ext == 'm4a') 
                                {
                                  echo "<audio src='uploded file/$filename' controls></audio>";
                                } 

                                if ($ext == 'txt' || $ext == 'pdf' || $ext == 'docx' || $ext == 'doc') 
                                {
				               		echo "<a href='{uploded file/". $row['file']."}'>". $row['file']."</a>";

				               		//fopen("uploded file/$row['file']", "r");
                                }

                            ?>
                            </center>
			</td>

			<td>
				<center><?php echo $row['file_date']; ?></center>
			</td>
			<td>
				<center><a href="delete file.php?id=<?php  echo $row['file_id']; ?> " onclick="return confirm('Are You Sure To Delete File');"><img src="remove-icon.png" width="50"></a></center>
			</td>
		</tr>	
<?php			
		}
		echo "</table>";
	 }
	}
?>
<table border="2">
	<tr>
		<td>
			<a href="FILE MANAGER.php">Back</a>
		</td>
		</tr>
</table>
</center>

