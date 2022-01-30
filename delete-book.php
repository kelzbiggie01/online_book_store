<?php
session_start();

$conn = mysqli_connect("localhost","root","","online_book_store");

if(!empty($_GET['book_id'])){
	$book_id = $_GET['book_id'];
	if($book_id != ''){
		$sql = "DELETE FROM books_products WHERE id='$book_id'";

			if (mysqli_query($conn, $sql)) {
			 		echo "<script> alert('Deleted Successfull'); window.location='dashboard.php'</script>";
				}else{
				echo "<script> alert('oops someting went wrong sorry'); window.location='dashboard.php'</script>";
			}	
	}else{
	echo "<script> alert('No book selected'); window.location='dashboard.php'</script>";
	}
}else{
	echo "<script> alert('No book selected'); window.location='dashboard.php'</script>";
}

?>