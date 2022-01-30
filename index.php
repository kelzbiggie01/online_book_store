<?php
session_start();
$conn = mysqli_connect("localhost","root","","online_book_store");
$get_books = mysqli_query($conn,"select * from books_products");
$username = "";
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

  .dr {
  width: 300px;
  padding: 10px;
  border: 2px solid gray;
  margin: 0;
  align-content: center;
}

.footer {
  /*position: fixed;*/
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
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
        <a class="nav-link" href="index.php" style="color: #ffffff;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novels.php" style="color: #ffffff;">Novels</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="plays.php" style="color: #ffffff;">Plays</a>
      </li>
      <?php
        if (@$_SESSION['user']!='') {
          echo '<li class="nav-item"><a class="nav-link" href="cartpage.php" style="color: #ffffff;">Cart</a></li>';
        }
      ?>

      <?php
        if (@$_SESSION['sess_admin']!='') {
          echo '<li class="nav-item"><a class="nav-link" href="dashboard.php" style="color: #ffffff;">Dashboard</a></li>';
        }
      ?>

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


<div class="row mt-3">
  <div class="col-12">
  	<div class="container">
    <div class="row">
        <?php
          while ($row = mysqli_fetch_array($get_books)) {  
        ?>
         <div class="col-md-4 mt-4">
            <div class="dr">
              <img src="books_cover/<?php echo $row['cover'];?>" alt="" height="200" width="275">
              <h4 class="card-title">
              <center><b><?php echo $row['title']; ?></b></h4></center>

              <center>
              <h5 class="card-text text-muted"><b><?php echo $row['author']; ?></b></h5><br>
              </center>

              <center><a href="add-cart2.php?prod_id=<?php echo $row['title'];?>" class="btn btn-outline-success"><?php echo @$row['price']; ?></a></center>
         </div>
      </div> 

    <?php } ?>

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