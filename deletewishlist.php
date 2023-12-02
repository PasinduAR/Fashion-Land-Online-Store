<?php
  session_start();
  include ('connect_db.php');
  if(!isset($_SESSION['customerid'])){
  header('location:User-login.php');
  }
  else{
  $g_id = $_GET['id'];
  $c_id = $_GET['cid'];
  
  $deletewish = "DELETE FROM wishlist where pid = '$g_id' AND userid = '$c_id'";
  if(mysqli_query($con, $deletewish)){
    header('location:wishlist.php');
  }

  }
?>