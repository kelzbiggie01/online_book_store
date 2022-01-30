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
  $title = $_POST['title'];
  $author = $_POST['author'];
  $publication = $_POST['publication'];
  $genre = $_POST['genre'];
  $price = $_POST['price'];
  $isbn = $_POST['isbn'];
  $date_added = $_POST['date_added'];
  $cover = $_FILES['cover']['name'];

if ($title != '') {
  $sql = "INSERT INTO books_products (title,author,publication,genre,price,isbn,date_added,cover) VALUES ('$title', '$author', '$publication','$genre', '$price', '$isbn', '$date_added', '$cover')";

  if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES["cover"]["tmp_name"], "books_cover/".$cover);

    
  echo "<script> alert('Book has been added successfully'); window.location='add-books.php'</script>";

  //session to hold success msg
  $_SESSION['sms'] = "Book was added successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}else{
  $_SESSION['sms'] = "Something went wrong";
}
}
$conn->close();
?>