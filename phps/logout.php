<?php 
session_start();

session_destroy();

	echo "<script> alert('Bye logout successfull'); window.location='../index.php'</script>";
 // header('Location: ../index.php');

?>