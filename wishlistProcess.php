<?php
  session_start();
  include ('connect_db.php');
  if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])){
  header('location:User-login.php');
  }
  else{
     $cusid = $_SESSION['customerid'];
    // echo "$cusid";
     $p_id =  $_POST['product_id'];
    // echo "$game_id";

    //check if the product is already in the wishlist 
    $sql_check = "SELECT * FROM wishlist where pid = $p_id AND userid = $cusid";
    $result_check = mysqli_query($con, $sql_check);

    if(mysqli_num_rows($result_check) == 1){
        echo 'already exist in wishlist';
        header('location:wishlist.php');
    }
    else{
        $insert = "INSERT INTO wishlist (userid, pid) values ($cusid, $p_id)";
        if(mysqli_query($con, $insert)){
            header('location:sproduct.php?product_id='.$p_id);
        }
    }
  }
?>