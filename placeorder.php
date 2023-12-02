<?php
  include ('connect_db.php');
  session_start();

  if(isset($_POST['placeOrderBtn'])){
     $cusid = $_SESSION['customerid'];
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $company = $_POST['company'];
     $country = $_POST['country'];
     $address = $_POST['address'];
     $city = $_POST['city'];
     $zip = $_POST['zip'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $cart = $_SESSION['cart'];

 
        echo 201;

  }