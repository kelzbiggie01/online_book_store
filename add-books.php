<?php
session_start();
require 'phps/add-book.php';
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
    </ul>
    <?php
    if(@$_SESSION['user'] != ''){
      echo '<a class="nav-link" href="phps/logout.php" style="color: #ffffff;">';
      echo $_SESSION['user'];
      echo ', Sign-out here</a>';
    }else{
      echo '<a class="nav-link" href="sign-in.php" style="color: #ffffff;">Hello,Sign-in here</a>';
    }

    ?>
        
  </div>
</nav>


<!--------------------------------------------------------------------------------------------------->
<div class="container">
	<div class="row">
		<div class="col-12">
  <form action="" method="POST" style="margin: 50px;" enctype="multipart/form-data">
    
<div class="card" style="width: 900px">
  <div class="card-header">
    <strong>Add Book</strong>
  </div>
  <div class="card-body">
    <h5 class="card-title">Fill all details</h5>
    <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Title</span>
  </div>
  <input type="text" class="form-control" name="title" required=""> &nbsp; &nbsp; &nbsp;
  <!-- see you later</div>--

  <div class="input-group mb-3">-->
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Author</span>
  </div>
  <input type="text" class="form-control" name="author" required="">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Publication</span>
  </div>
  <input type="text" class="form-control" name="publication" required=""> &nbsp; &nbsp; &nbsp;
  <!-- see you later</div>--

  <div class="input-group mb-3">-->
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Genre</span>
  </div>
 <select class="browser-default custom-select" name="genre" required="">
  <option selected disabled="">choose genre</option>
  <option>novels</option>
  <option>plays</option>
</select>
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Price</span>
  </div>
  <input type="text" class="form-control" name="price" required=""> &nbsp; &nbsp; &nbsp;
  <!-- see you later</div>--

  <div class="input-group mb-3">-->
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">ISBN</span>
  </div>
  <input type="text" class="form-control" name="isbn" required="">
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Date added</span>
  </div>
  <input type="date" class="form-control" name="date_added" required=""> &nbsp; &nbsp; &nbsp;
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Books Cover</span>
  </div>
  <input type="file" class="form-control" name="cover">
  </div>

    <input type="submit" name="submit" value="Add" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="dashboard.php" class="btn btn-warning">Cancel</a>
  </div>
</div>
</form>
</div>
	</div>
</div>

<!--------------------------------------------------------------------------------------------------->




	<div class="footer bg-dark">
  		<p>Mzumbe University<br>@2022</p>
	</div>

</body>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</html>