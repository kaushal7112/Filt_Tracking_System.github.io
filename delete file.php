<?php
	$id = $_REQUEST['id'];

	$con=mysqli_connect("localhost","root","","ft system");

	$q="delete from file where file_id='$id'";
	$r=mysqli_query($con,$q);

	if ($r) 
	{
		?>
		<script type="text/javascript">
			alert("File Deleted");
		</script>
		<?php
	}
	else
	{
		echo "error!!";
	}

	exit;
?>