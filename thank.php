<?php

error_reporting(0);
session_start();
include ('connect_db.php');
$userEmail = $_SESSION['customer'];
$cart = $_SESSION['cart'];
$user_name =  $_SESSION['cusname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <title>Thank You page</title>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
</script>
<script> 
$(function(){
  $("#header").load("nav.php"); 
  $("#footer").load("footer.html"); 
});
</script> 
    <style>
        body{
            font-family: 'sans-serif';
        }
        .body-sec{
            width: 100%;
            height: 80vh;
        }
    </style>
</head>
<body>

    <div id="header"></div>

    <div class="body-sec">
    <div class="col-md-10 col-11 mx-auto m-5 p-5 rounded-4" style="min-height: 260px; background-color: #eee;">
    <p  style="color: green; font-size: 20px; font-family:sans-serif;">Payment Successful</p>
    <h1 style="color: red; font-size: 50px; font-family:sans-serif;">Thank For Purchase !!</h1>
    </div>
    </div>


    <?php include('footer.html') ?>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>