<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "online_book_store";
$conn =mysqli_connect($hostname,$username,$password,$database);
if(mysqli_connect_errno()){
  echo mysqli_connect_error();  
}

if(isset($_POST['submit'])){
  $name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password == $password2) {
  $sql = "INSERT INTO users (name,email,password,role) VALUES ('$name', '$email', '$password', 'customer')";

  if ($conn->query($sql) === TRUE) {

  echo "<script> alert('Welcome to Online Book Store please sign-in to continue'); window.location='sign-in.php'</script>";
      } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }else{
  $msg = "Password didnt match";
  }
}





$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Online book store
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
  height: 80px;
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
        <a class="nav-link" href="#" style="color: #ffffff;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #ffffff;">Sci-Fi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #ffffff;">Literary</a>
      </li>
  </div>
</nav>


<div class="row" style="margin-bottom: 40px;">
  <div class="col-12">	
	<body class="bg-light">
    <div class="pt-4"></div>
    <div class="container">
      <div class="row justify-content-center pt-5">
        <div class="col-md-6 col-xl-5 col-xs-12">
          <div class="card card-body">
              <form class="" action="" method="POST">
                <center><h2>Online book seller</h2></center>
                <h1 class="h3 mb-3 font-weight-normal">Create an Account</h1>
                <center><?php echo @$msg;?></center>
                <div class="form-group pb-2 pt-2">
                  <input type="text" name="name" class="form-control" placeholder="Fullname" required="">
                </div>          
                <div class="form-group pb-2 pt-2">
                  <input type="email" name="email" class="form-control" placeholder="Email address" required="">
                </div>
                <div class="form-group pb-1 pt-2">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group pb-1 pt-2">
                  <input type="password" name="password2" class="form-control" placeholder="Re-Type your Password" required="">
                </div>

                <label>By continuing, you agree to Online book seller Conditions of Use and Privacy Notice.</label><br>
                
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                <!-- <p class="mt-3 mb-3 text-muted"><a href="../index.php">Homepage</a></p> -->
                <p class="mt-3 mb-3 text-muted" align="center">Already have an account?<a href="sign-in.php"> Sign-In
                </a></p>
              </form>
              </div>
          </div>
        </div>
      </div>
    </div>

	</div>

	<div class="footer bg-dark">
  		<p>Mzumbe University<br>@2022</p>
	</div>

</body>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>