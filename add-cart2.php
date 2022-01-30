<?php
session_start();

$conn = mysqli_connect("localhost","root","","online_book_store");

if(!empty($_GET['prod_id'])){
	$book_id = $_GET['prod_id'];
	@$user_id = $_SESSION['user'];
	$date_added = date("Y/m/d");
	if($user_id != ''){
		$sql = "INSERT INTO user_cart(user_name,book_name,date_added,status) VALUES ('$user_id','$book_id','$date_added','not paid')";
			if (mysqli_query($conn, $sql)) {
			 		echo "<script> alert('Your book has been added to cart'); window.location='cartpage.php'</script>";
				}else{
				echo "<script> alert('oops someting went wrong sorry'); window.location='index.php'</script>";
			}	
	}else{
	echo "<script> alert('Please signin first'); window.location='index.php'</script>";
	}
}

?>