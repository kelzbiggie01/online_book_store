<?php
session_start();
@$user = $_SESSION['user'];

$conn = mysqli_connect("localhost","root","","online_book_store");


$sql = "UPDATE user_cart SET status='paid' WHERE user_name='$user'";

if (mysqli_query($conn, $sql)) {
  echo "<script> alert('Thank you for buying our product'); window.location='cartpage.php'</script>";
} else {	
  echo "<script> alert('Ooops Something went try again later'); window.location='cartpage.php'</script>";
}

mysqli_close($conn);

?>