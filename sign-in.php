<?php
$conn = mysqli_connect("localhost","root","","online_book_store");

$msg = "";

if(isset($_POST["btnLogin"])){

  //query for customers
  $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '".$_POST["password"]."' and role = 'customer' ");

  //query for admin login
  $result_ad = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '".$_POST["password"]."' and role = 'admin'");

  if(mysqli_num_rows($result) == 1){
    $row_user = mysqli_fetch_array($result);
    
     //session to control user login
     session_start(); 
    $_SESSION['user'] = $row_user['name'];
    $_SESSION['user_id'] = $row_user['user_id'];
    
    echo "<script> alert('Login was Successfull'); window.location='index.php'</script>";


  }elseif(mysqli_num_rows($result_ad) == 1){
    $row_user = mysqli_fetch_array($result_ad);
    
     //session to control user login
     session_start(); 
    $_SESSION['user'] = $row_user['name'];
    $_SESSION['sess_admin'] = $row_user['name'];

    echo "<script> alert('Welcome our administrator'); window.location='dashboard.php'</script>";
  }else{
    $msg = "email or password didn't match";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<!-- <link rel="stylesheet" href="bootstrap-4.6.1/css/bootstrap.css"> -->

	<!-- Bootstrap CSS CDNs-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
	table, td {  
  	border: 3px solid #ddd;
  	align-items: center;
  	text-align: center;
	}

	table {
  	border-collapse: collapse;
  	width: auto;
  	margin-top: 25px;
  	margin-bottom: 25px;
	}

	td {
  	padding: 16px;
	}

	.footer {
  /*position: static;*/
  left: 0;
  bottom: 0;
  height: 100px;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
  padding-top: 20px;
}
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <a class="navbar-brand" href="index.php" style="color: #ffffff;">Online Book Seller</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color: #ffffff;">Home</a>
      </li>
  </div>
</nav>


<div class="row">
  <div class="col-12">
  	
	<body class="bg-light">
    <div class="pt-4"></div>
    <div class="container">
      <div class="row justify-content-center pt-5">
        <div class="col-md-6 col-xl-5 col-xs-12">
          <div class="card card-body">
              <form action="" method="POST">
                <center><h2>Online book seller</h2></center>
                <h1 class="h3 mb-3 font-weight-normal">Sign-in</h1>
                    <center><?php echo $msg; ?></center>            
                <div class="form-group pb-2 pt-2">
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
                </div>
                <div class="form-group pb-1 pt-2">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
                </div>

                <label>By continuing, you agree to Online book seller Conditions of Use and Privacy Notice.</label><br>
                
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Sign in</button>
              </form>
              <p class="mt-3 mb-3 text-muted" align="center"><a href="sign-up.php">
                <button class="btn btn-lg btn btn-outline-warning btn-block">Create an Account</button>
                </a></p>
              </div>
          </div>
        </div>
      </div>
    </div>

	</div>

  </div>



	<!-- <div class="footer bg-dark">
  		<p>Copy of copy rights from kelvin mayeye</p>
	</div> -->

</body>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>