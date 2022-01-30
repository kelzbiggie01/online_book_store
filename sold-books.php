<?php
session_start();
$conn = mysqli_connect("localhost","root","","online_book_store");
include 'phps/session_validate.php';
$total_buyed = mysqli_query($conn, "select * from user_cart where status = 'paid'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Sold Books
	</title>
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

.box-info1{
  width: 160px;
  height: 100px;
  background-color: rgb(0, 132, 255);
  border-radius: 5%;
  float: left;
  margin-left: 30px;
  margin-right: 33px;
  margin-bottom: 20px;
  text-align: center;
  color: #ffffff;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
.scroll{
  width: 100%;
  height: 400px;
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
  <h3>Books That are sold</h3>

  <div class="row">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Title" title="Type title">
    <div class="scroll">
<table id="myTable">
  <tr class="header bg-dark" style="color: #fff;">
    <th style="width: 2%;">S/N</th>
    <th style="width:15%;">UserName</th>
    <th style="width:15%;">BookName</th>
    <th style="width: 15%;">Date Added</th>
    <th style="width: 10%">Status</th>
  </tr>
  
  <?php
  $NO = 1;
  while ($row = mysqli_fetch_array($total_buyed)) {  
  ?>

  <tr>
    <td><?php echo $NO; ?></td>
    <td><?php echo $row['user_name']; ?></td>
    <td><?php echo $row['book_name']; ?></td>
    <td><?php echo $row['date_added']; ?></td>
    <td><?php echo $row['status']; ?></td>
  </tr>

  <?php
  $NO++;
   } ?>



</table>

<a href="dashboard.php"><button type="button" class="btn btn-primary">Back</button></a>

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

    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
    
  }
}
</script>

</html>