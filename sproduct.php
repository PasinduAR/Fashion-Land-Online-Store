<?php
  error_reporting(0);
  session_start();
  include ('connect_db.php');
  $id =  $_GET['product_id'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fashion Land</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome
                                    /fontawesome-free@6.1.2/css/fontawesome.min.css">
                                    <link rel="stylesheet" 
                                    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
                    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
                                    crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    /*      Single Product      */

#prodetails {
    font-family: 'spartan', sans-serif;
    display: flex;
    margin-top: 20px;
}
#prodetails .single-pro-image{
    width: 40%;
    margin-right: 50px;
}
.small-img-group{
    display: flex;
    justify-content: space-between;
}
#MainImg{
    margin-bottom: 4px;
}
.small-img-col{
    flex-basis: 24%;
    cursor: pointer;
}
#prodetails .single-pro-details{
    width: 50%;
    padding-top: 30px;
}
#prodetails .single-pro-details h4{
    padding: 40px 0 20px 0;
}
#prodetails .single-pro-details h2{
    font-size: 26px;
}
#prodetails .single-pro-details select{
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
    font-size: 16px;
}
#prodetails .single-pro-details input{
    width: 50px;
    height: 47px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}
#prodetails .single-pro-details input:focus{
    outline: none;
}
#prodetails .single-pro-details form button{
    background: #088178;
    padding: 0 30px;
    color: #fff;
}
#prodetails .single-pro-details span {
    line-height: 25px;
}




.icons .cart-box{
    position: relative;
    padding-top: 6px;
}
.cart-box .cart-count{
    position: absolute;
    width: 15px;
    height: 15px;
    background-color: green;
    left: 28px;
    top: 3px;
    border-radius: 5px;
}
.cart-box .cart-count p{
    font-size: 11px;
    padding: 2px;
    padding-left: 4px;
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

  <div id="header"></div>

<!-- sproduct Section start -->
    <?php
       $query =" select * from shop where id = ?"; 
       $stmt = mysqli_stmt_init($con);
       if(!mysqli_stmt_prepare($stmt,$query)){
         echo "SQL statment failed";
       }
       else{
         mysqli_stmt_bind_param($stmt, "s", $id);
       }
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       while($row = mysqli_fetch_assoc($result)){
        ?>
       
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/sproduct/<?php echo $row['image'];?>" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/sproduct/<?php echo $row['image'];?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/sproduct/<?php echo $row['image1'];?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/sproduct/<?php echo $row['image2'];?>" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/sproduct/<?php echo $row['image3'];?>" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirt</h6>
            <h4 style="font-weight: bold;"><?= $row['name']; ?></h</h4>
            <h2 style="font-weight: bold;">$<?= $row['price']; ?></h</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXl</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <div style="display: flex;">
            <form action="CartProcess.php" method="post">
               <input type="hidden" name="product_id" value="<?= $id ?>">
            <button class="normal" type="submit">Add to Cart</button>
            </form>
            <form action="wishlistProcess.php" method="POST">
                          <input type="hidden" name="product_id" value="<?= $id ?>">
                          <button style="background-color: red;" class="btn mx-2 p-3 normal" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"  style="padding-right:6px; font-size: 15px;" ></i>Add to wishlist</button>
                          </form>
            </div>
            <h4 style="font-weight: bold;">Product Details</h4>
            <span><?= $row['description']; ?></h</span>
        </div>
    </section>
    <?php
       }
    ?>

    <section id="product1" class="section-p1">
        <h2 style="font-weight: bold;">Feature Products</h2>
        <p>#New Summer Collection 2022</p>
        <div class="pro-container">
        <?php
  $query =" select * from shop order by rand() limit 4"; 
  $result = mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
 ?>
            <div class="pro">
                <img src="img/products/<?php echo $row['image'] ?>" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;"><?php echo $row['name'] ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$<?php echo $row['price'] ?></h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
    <?php
   }
}
    ?>
            <!--
            <div class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">HOT JUICE Gents Shirt-Green Printed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$30.59</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$24.74</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>Chanel</span>
                    <h5 style="font-weight: bold;">Ayana Luxe Linen Drawstring Pant</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$48.32</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
        -->
        </div>
    </section>

    <section id="newsletter" style= "background-image: url(img/banner/b14.jpg);" class="section-p1 section-m1">
        <div class="newstext">
            <h4 style="font-weight: bold;">Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <?php include('footer.html'); ?>

    <!--<script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>-->
    
    
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.small-img').click(function(e){
                $('#MainImg').attr('src', $(this).attr("src"));
            });
        });
    </script>

    <!-- Home Section end -->

        
</body>
</html>