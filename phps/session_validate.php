<?php
$admin_session;
if($_SESSION['user']==""){
   header('Location: index.php');

 }else{
 	$admin_session = $_SESSION['user'];
 	$sql = mysqli_query($conn,"select name from users where name = '$admin_session' and role ='admin'");
 }
 if($admin_session != ''){
 	if(mysqli_num_rows($sql) == 0){
 	echo "<script> alert('Sorry you have no permission to visit this page'); window.location='index.php'</script>";
 }
}
?>