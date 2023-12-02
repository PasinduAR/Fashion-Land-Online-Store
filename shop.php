<?php
       include ('connect_db.php');
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
    /*      Shop Page       */
/* page-header */

#page-header {
    position: relative;
}
#page-header img {
    width: 100%;
    height: 40vh;
    background-size: cover;
}
#page-header .para {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    justify-content: center;
    text-align: center;
    flex-direction: column;
}
#page-header h2,
#page-header p {
    color: #fff;
}
#pagination {
    text-align: center;    
}
#pagination a {
    text-decoration: none;
    background-color: #088178;
    padding: 15px 20px;
    border-radius: 4px;
    color: #fff;
    font-weight: 600;
}
#pagination a i{
    font-size: 16px;
    font-weight: 600;
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

   <div id="header"></div>        

    <!-- shop Section start -->
    <section id="page-header">
        <img  src="img/banner/b1.jpg" alt="">   
        <div class="para">
            <h2>#summercollection 2022</h2>
            <p>Save more with coupons & up to 70% off! </p>  
        </div>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
        <div class="pro-container">
        <?php
  $query =" select * from shop"; 
  $result = mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
 ?>
            <div class="pro" onclick="window.location.href='sproduct.php?product_id=<?= $row['id']; ?>'">
                <img src="img/products/<?php echo $row['image'];?>" alt="">
                <div class="des">
                    <span><?= $row['brand']; ?></span>
                    <h5 style="font-weight: bold;"><?= $row['name']; ?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$<?= $row['price']; ?></h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <?php
   }

}
    ?><!--
            <div class="pro">
                <img src="img/products/m5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">HOT JUICE Gents Shirt-Black Printed</h5>
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
                <img src="img/products/s3.jpg" alt="">
                <div class="des">
                    <span>GATSBY</span>
                    <h5 style="font-weight: bold;">Gents V Neck T-Shirt(L/S)-Black</h5>
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
                <img src="img/products/L1.jpg" alt="">
                <div class="des">
                    <span>Chanel</span>
                    <h5 style="font-weight: bold;">Ladies Tiered Dress-Blue Printed</h5>
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
            <div class="pro">
                <img src="img/products/L2.jpg" alt="">
                <div class="des">
                    <span>Prada</span>
                    <h5 style="font-weight: bold;">Ladies Lace Top - Blue</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$36.23</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/L3.jpg" alt="">
                <div class="des">
                    <span>Dior</span>
                    <h5 style="font-weight: bold;">Ladies Printed Skirt-White Printed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$34.55</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/K3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">Boys Dino Pajamas</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$23.44</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/K4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">Girls Easter Bunny Snug Fit Cotton Pajamas</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$17.97</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/s1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">GATSBY Gents Polo T-Shirt-Red</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$13.95</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
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
            <div class="pro">
                <img src="img/products/L4.jpg" alt="">
                <div class="des">
                    <span>Prada</span>
                    <h5 style="font-weight: bold;">Ladies Ruff Detail Short-Yellow Printed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$36.23</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/L5.jpg" alt="">
                <div class="des">
                    <span>Dior</span>
                    <h5 style="font-weight: bold;">Ladies Double Pocket Dress-Dark Grey</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$34.55</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/m6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">MOOSE Gents Chino Pant - Black</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$23.44</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/L6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5 style="font-weight: bold;">Ladies Maggie Sleeve Jumpsuit-Pink Printed</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="font-weight: bold;">$17.97</h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart"></i></a>
            </div>-->
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-sharp fa-solid fa-arrow-right"></i></a>
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
    <!-- Home Section end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"   
                            crossorigin="anonymous"></script>
</body>
</html>