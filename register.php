<?php

  include 'connect.php';
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Password= $_POST['Password'];

  $sql = "INSERT INTO `register`(`Name`, `Email`, `Password`) VALUES ('$Name', '$Email', '$Password')";

$result = mysqli_query( mysql: $conn,query: $sql) or die("Query Failed");

if ($result) {
      header(header: 'location')
}
?>