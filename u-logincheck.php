<?php 
  session_start();
  if ($_SESSION['clogin'] != true || !isset($_SESSION['clogin'])) 
  {
          header("location:client login.php");
          exit;
  }
?>