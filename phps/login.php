<?php
$conn = mysqli_connect("localhost","root","","online_book_store");

$msg = "";

if(isset($_POST["btnLogin"])){

  $result = mysqli_query($conn,"SELECT * FROM user WHERE email='" . $_POST["email"] . "' and password = '".$_POST["password"]."' ");

  if(mysqli_num_rows($result) == 1){
    $row_user = mysqli_fetch_array($result);
    
     //session to control user login
     session_start(); 
    $_SESSION['user'] = $row_user['id'];
   
    header('Location: pages/home.php');


  }else{

    $msg = "email or password didn,t match";
  }
}


?>