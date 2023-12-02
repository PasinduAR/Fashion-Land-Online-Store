<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');
  /*if(isset($_POST['product_id'])){

    $game_id =  $_POST['product_id'];
    $quntity = 1;
  }

   $_SESSION['cart'][$game_id]=array($quntity);*/

   $cart = $_SESSION['cart'];
   $customer = $_SESSION['customer'];
 
  
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
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Cart</title>
    <style>
               
h2 {
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
}

.nk-decorated-h,
.nk-decorated-h-2 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.nk-decorated-h > span,
.nk-decorated-h > a,
.nk-decorated-h-2 > span,
.nk-decorated-h-2 > a {
    display: block;
    -webkit-box-flex: 1;
        -ms-flex: auto;
            flex: auto;
    padding-right: 20px;
    padding-left: 20px;
}

.nk-decorated-h::after, .nk-decorated-h::before,
.nk-decorated-h-2::after,
.nk-decorated-h-2::before {
    content: "";
    display: block;
    -webkit-box-flex: 100;
        -ms-flex: 100;
            flex: 100;
    border-bottom: 4px solid;
    -webkit-transform: translateY(-10px);
        -ms-transform: translateY(-10px);
            transform: translateY(-10px);
}

.nk-decorated-h::before,
.nk-decorated-h-2::before {
    -webkit-box-flex: 20px;
        -ms-flex: 20px;
            flex: 20px;
    width: 20px;
    min-width: 20px;
}

.nk-decorated-h-2::after, .nk-decorated-h-2::before {
    border-bottom-color: #293139;
}
.text-main-1 {
    color: #dd163b !important;
}
    



.icons .cart-box{
    position: relative;
    padding-top: 6px;
}
.cart-box .cart-count{
    position: absolute;
    width: 16px;
    height: 16px;
    background-color: green;
    left: 28px;
    top: 3px;
    border-radius: 5px;
}
.cart-box .cart-count p{
    font-size: 10px;
    padding: 2px;
    padding-left: 6px;
    margin: 0;
    color: #fff;
}
.icons .cart-box  .drop-down-cart{
top:35px;
/* From https://css.glass */
background: #eee;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(3.2px);
-webkit-backdrop-filter: blur(3.2px);
border: 1px solid green;
left: -200px;
width: 300px;
min-height: 400px;
z-index: 1000;
position: absolute;
display: none;
border-top: 2px solid green;
padding: 10px 20px;
transition: all 0.3s ease;
}

</style>
    
</head>
<body>

  <!-- Navigation Bar -->
  <?php include('nav.php'); ?>

  <!------------------------------------>


   <h3 align="center" style="color:green; margin-top: 30px;">CART</h3>
  <div class=" col-10 col-md-7 col-lg-7 mt-4 mx-auto">
    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
 <table class="table table-borderless">
    <tr class="text-warning">
      <th><h5>IMAGE</h5></th>
      <th><h5>NAME</h5></th>
      <th><h5>PRICE</h5></th>
      <th><h5>ACTION</h5></th>
    </tr>
    <tr>
      <th colspan="4"><hr style="color: #red;"></th>
    </tr>
 <?php
              $total = 0;
              foreach($cart as $key => $value){
              /*  echo $key . "<br>";*/
        
              $sql = "select * from shop where id = '$key'";
              $result = mysqli_query($con,$sql);

           while($row = mysqli_fetch_assoc($result)){
                
            ?>
 
    <tr>
      <td>
        
      <form action="singlepage.php" class="" method="GET">
                <button type="submit"  class="" style="border:1px solid #fff;">
                <input type="hidden" name="product_id" value="<?= $row['id']; ?>">
                <img src="img/products/<?php echo $row['image'];?>" class="" width="100px" height="130px;" alt="">
                </button> 
                </form></td>
      <td><p class="mt-md-5 text-primary"><?php echo $row['name'];?></p></td>
      <td><p class="mt-md-5 text-dark"><span>$</span><?php echo $row['price'];?></p></td>
      <td><a href="deleteCartItem.php?id=<?php echo $key;?>" class="badge badge-primary bg-danger mt-md-5" style=" color: #000; padding: 10px; text-decoration: none; font-size: 15px">Remove</a></td>
    </tr>
  
                <?php

        $total = $total + $row['price'];

               }
              }
                ?>
  </table>
 </div>
 </div>

    <div class="col-md-12 mt-5 mb-5">
    <div class="card col-md-5 col-10 col-lg-5 mt-4 bg-gradient-light mx-auto">
        <div class="card-header">
            <h5  class="text-primary text-center">CART TOTALS</h5>
        </div>
        <div class="card-body">
           <div class="row dg-light">
             <h5  class="text-dark col-md-4 col-6"> SUBTOTAL</h5>
             <h5  class="text-dark col-md-1 col-2"> |</h5>
             <h5  class="col-md-7 col-4 " style="color: orange;">$<?php echo $total; ?></h5>
           </div>
            
            <a href="checkout.php?total=<?php echo $total ?>" class=" mt-4 badge badge-warning px-2 py-2 col-12 col-md-12 col-lg-12 bg-warning " style="text-decoration:none; color: #FFF; font-size: 15px;">PROCEED TO CHECKOUT</a>
        </div>
    </div>
    </div>

  <!--footer section--> 
  <?php include('footer.html'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>