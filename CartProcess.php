<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');
  if(isset($_POST['product_id'])){

    $product_id =  $_POST['product_id'];
    $quntity = 1;
 
  }
   $_SESSION['cart'][$product_id]=array($quntity);
   header('location:sproduct.php?product_id='.$product_id);


?>