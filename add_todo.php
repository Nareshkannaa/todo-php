<?php
 session_start();
  include('conn.php');
  //$username=$_SEESION["USER_USERNAME"];

  // get post data
  $title = $_POST['title'];
  $desc = $_POST['description'];
  $time = $_POST['time'];
  $username=$_POST['name'];
  // execute query
  $query = "INSERT INTO list (title, description,time,username) VALUES ('$title', '$desc', '$time','$username')";
  mysqli_query($con, $query);
  if($query)
 { 
  // return to index.php after running the script 
  header('location: index.php');
}
else{
  echo("query issue");
}
  // close connection
  mysqli_close($con);
?>