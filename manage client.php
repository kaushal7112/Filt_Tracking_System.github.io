<?php
	include "logincheck.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body bgcolor="rgb(0, 0, 255, max = 255, alpha = 125, names ="blue50")">
	<table border="2" align="center" valign="middle" bgcolor="litegreen">
		<th>
			Client Id
		</th>

		<th>
			Client Name
		</th>

		<th>
			Client Mobile No.
		</th>

		<th>
			Client Email
		</th>

		<th>
			Client Password
		</th>

		<th>
			Client Address
		</th>

		<th>
			Client Gender
		</th>


		<?php
			$con=mysqli_connect("localhost","root","","ft system");
			$q="select * from clieint";
			$r=mysqli_query($con,$q);
			while ($row=mysqli_fetch_array($r)) 
			{
		?>
				<tr>
					<td>
						<center>
						<?php
						 echo $row['client_id'];
						?>
						</center>
					</td>

					<td>
						<center>
						<?php
						 echo $row['c_name'];
						?>
						</center>
					</td>

					<td>
						<center>
						<?php
						 echo $row['c_phone'];
						?>
						</center>
					</td>

					<td>
						<center>
						<?php
						 echo $row['c_email'];
						?>
						</center>
					</td>

					<td>
						<center>
						<?php
						 echo $row['c_pass'];
						?>
						</center>
					</td>

					<td>
						<center>
						<?php
						 echo $row['address'];
						?>
						</center>
					</td>

					<td>
						<center>
						<?php
						 echo $row['c_gen'];
						?>
						</center>
					</td>

					<td>
						<a href="delete client.php?id=<?php echo $row['client_id'] ?> " onclick="return confirm('Are You Sure To Delete Client');"><center><img src="remove-icon.png" width="50"></a>
					</td>
				</tr>
		<?php
			}
		?>
	</table>
</body>
</html>