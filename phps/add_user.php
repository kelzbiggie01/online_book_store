<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "online_book_store";
$conn =mysqli_connect($hostname,$username,$password,$database);
if(mysqli_connect_errno()){
	echo mysqli_connect_error();	
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password == $password2) {
	$sql = "INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {

  echo "<script> alert('Welcome to Online Book Store'); window.location='../index.php'</script>";
	} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}



$conn->close();

?>