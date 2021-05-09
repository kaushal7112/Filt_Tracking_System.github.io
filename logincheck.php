<?php 
  session_start();
  if ($_SESSION['login'] != true || !isset($_SESSION['login'])) 
  {
  	 ?>
  		 <script>
  		  	alert("you have to login first");
  		  	window.location="Department login.php";
  		  </script>
  		 
       <?php
          exit;
  }
?>