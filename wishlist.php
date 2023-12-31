<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');
  if(!isset($_SESSION['customer']) && empty($_SESSION['customer'])){
  header('location:user-login.php');
  }
  else{
     $cusid = $_SESSION['customerid'];
    // echo "$cusid";
     $product_id =  $_POST['product_id'];
    // echo "$game_id";
  }

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
    <title>Wish List</title>
</head>
<body>

    <!--      header       -->

    <div id="header"></div>

    <!---->


    
  <div style="min-height:70vh;" class=" col-10 col-md-7 col-lg-7 mx-auto">
  <h2 class="my-4" align="center" style="color: green;">WISH LIST</h2>
    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
 <table class="table table-borderless">
    <tr class="text-warning">
      <th><h5>IMAGE</h5></th>
      <th><h5>NAME</h5></th>
      <th><h5>PRICE</h5></th>
      <th><h5>ACTION</h5></th>
    </tr>
    <tr>
      <th colspan="4"><hr style="color: #eee;"></th>
    </tr>
 <?php
              $cusid = $_SESSION['customerid'];

              //SQL 
              $sql = "select * from wishlist JOIN shop on shop.id = wishlist.pid where userid = '$cusid'";
              $result = mysqli_query($con,$sql);

           while($row = mysqli_fetch_assoc($result)){
                
            ?>
 
    <tr>
      <td>
        
      <form action="sproduct.php" class="" method="GET">
                <button type="submit"  class="" style="border:1px solid #fff;">
                <input type="hidden" name="product_id" value="<?= $row['id']; ?>">
                <img style="border: 1px solid red;" src="img/products/<?php echo $row['image'];?>" class="" width="100px" height="130px;" alt="">
                </button> 
                </form></td>
      <td><p class="mt-md-5" style="color: rgb(0, 0, 0);"><?php echo $row['name'];?></p></td>
      <td><p class="mt-md-5 text-primary"><span>$</span><?php echo $row['price'];?></p></td>
      <td><a href="deletewishlist.php?id=<?php echo $row['id'];?>&cid=<?php echo $_SESSION['customerid']; ?>" class="badge badge-primary bg-danger mt-md-5" style=" color: #fff; padding: 10px; text-decoration: none; font-size: 15px">Remove</a></td>
    </tr>
  
                <?php
               }
              
                ?>
  </table>
 </div>
 </div>

    <!---footer section-->
    <div id="footer"></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>