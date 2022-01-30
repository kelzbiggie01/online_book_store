<?php
session_start();
@$user = $_SESSION['user'];
$conn = mysqli_connect("localhost","root","","online_book_store");
$get_cart = mysqli_query($conn,"SELECT * FROM user_cart WHERE user_name ='$user'");

if(isset($_POST['btnpay'])){
$sql = "UPDATE user_cart SET status='payed' WHERE user_name='$user'";

if (mysqli_query($conn, $sql)) {

  exit();
  echo "string";
  echo "<script> alert('Login was Successfull'); window.location='cartpage.php'</script>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
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
      .table{
        margin-top: 10px;
      }

  .dr {
  width: 300px;
  padding: 10px;
  border: 2px solid gray;
  margin: 0;
  align-content: center;
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

.scroll{
  width: auto;
  height: 900px;
  overflow: auto;
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
        <a class="nav-link" href="" style="color: #ffffff;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #ffffff;">Sci-Fi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #ffffff;">Literary</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #ffffff;"></a>
      </li>
    
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


<div class="container">
  <h2>Welcome <?php echo $_SESSION['user']; ?></h2><br>
  <h4>Here are your book from cart</h4>

  <div>
    <div class="scroll">
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Book Title</th>
      <th scope="col">date added</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
       while ($row = mysqli_fetch_array($get_cart)) {
    ?>
    <tr>
      <td><?php echo $row['user_name']; ?></td>
      <td><?php echo $row['book_name']; ?></td>
      <td><?php echo $row['status']; ?></td>
      <td>2000-03-02</td>
      <td><a href="" class="badge badge-pill badge-danger" name="btnpay" data-toggle="modal" data-toggle="modal" data-target="#exampleModal">Buy</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

<!-- buyin.php--->

<a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
    </div>
  </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You are About to Buy this book <br> Visit our any of our offices to pick your book
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">About</button>
        <a href="buyin.php"><button type="button" class="btn btn-primary">Ok</button></a>
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