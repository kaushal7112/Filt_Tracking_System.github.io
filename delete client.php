<?php
	$id = $_REQUEST['id'];

	$con=mysqli_connect("localhost","root","","ft system");

	$q="delete from clieint where client_id='$id'";
	$r=mysqli_query($con,$q);

	if ($r) 
	{
		?>
		<script type="text/javascript">
			alert("Client Deleted");
			window.location="Manage Client.php";
		</script>
		<?php
	}
	else
	{
		echo "error!!";
	}
?>