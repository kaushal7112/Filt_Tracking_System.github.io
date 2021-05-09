<?php
	include "logincheck.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="yellow">
	<center>
	<table border="2">
		<th>
			FILE ID
		</th>

		<th>
			FILE NAME
		</th>

		<th>
			FILE
		</th>

		<th>
			FILE DATE
		</th>

		<th>
			ACTION 
		</th>

		 <?php 
			$con=mysqli_connect("localhost","root","","ft system");
			$q="select * from file";
			$r=mysqli_query($con,$q);

			$n=mysqli_num_rows($r);

		if ($n==0) 
		{
			echo "<tr>
					<td colspan=5>
						no any record!!
					</td>
				  </tr>";
		}
		else
		{
		while ($row=mysqli_fetch_array($r))
		{
?>
		<tr>
			<td>
				<center>
					<?php echo $row['file_id']; ?>
				</center>
			</td>

			<td>
				<center><?php echo $row['file_name']; ?></center>
			</td>

			<td>
				<center>
				 <?php 
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
				               		echo "<a href='uploded files/". $row['file']."'>". $row['file']."</a>";
                                }

                            ?>  
                </center>   
			</td>

			<td>
				<center><?php echo $row['file_date']; ?></center>
			</td>
			<td>
				<a href="delete file.php?id=<?php  echo $row['file_id']; ?> " onclick="return confirm('Are You Sure To Delete File');"><center><img src="remove-icon.png" width="50"></center></a>
			</td>
			</center>
		</tr>
		<?php
	}
}
		?>	
	</table>
</center>
</body>
</html>