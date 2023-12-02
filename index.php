<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fashion Land</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

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
    
.container1{
    width: 100%;
    height: auto;
    background: #fff;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-flow: wrap;
    padding: 5px 40px;
}
.container1 .imp{
    border: 1px solid #000;
    padding: 10px 25px 10px 25px;
    font-size: 20px;
    font-weight: bold;
    position: relative;
    top: 20%;
    left: 50%;
    transform: translate(-50%, 50%);
    min-width: 150px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.container1 .box1 .men1:hover{
    background-color: pink;
}
.container1 .box2 .women1:hover{
    background-color: lightblue;
}
.container1 .box3 .kid1:hover{
    background-color: lightgreen;
}

.container1 .box1{
    width: 30%;
    height: 250px;
    background : url(img/banner-1.jpg);
    background-size: cover;
    background-position: center;
    margin: 10px;
    box-sizing: border-box;
    font-size: 50px;
    position: relative;
}
.container1 .box2{
    width: 30%;
    height: 250px;
    background: url(img/banner-2.jpg);
    background-size: cover;
    background-position: center;
    margin: 10px;
    box-sizing: border-box;
    font-size: 50px;
    position: relative;
}
.container1 .box3{
    width: 30%;
    height: 250px;
    background: url(img/banner-3.jpg);
    background-size: cover;
    background-position: center;
    margin: 10px;
    box-sizing: border-box;
    font-size: 50px;
    position: relative;
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
    
    <!-- Naviga -->

    <div id="header"></div>
    
    <!-- Home Section start -->
    <section id="hero">
        <img src="images/hero_man.png" alt="">
        <div class="te">
            <h4>Trade-in-offer</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons & up to 70% off! </p>
            <button style= "background-image: url(img/button.png)"> Shop Now</button>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <div class="container1">
            <div class="box1">
                <button class="men1 imp">Men's</button>
            </div>
            <div class="box2">
                <button class="women1 imp">Women's</button>
            </div>
            <div class="box3">
                <button class="kid1 imp">Kid's</button>
            </div>
    </div>

    <section id="product1" class="section-p1">
        <h2 style="font-weight: bold;">Feature Products</h2>
        <p>#New Summer Collection 2022</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Gildan</span>
                    <h5 style="font-weight: bold;">Gildan Ultra Cotton T-shirt </h5>
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
                <img src="img/products1/m5.jpg" alt="">
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
                <img src="img/products1/s3.jpg" alt="">
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
                <img src="img/products1/L1.jpg" alt="">
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
                <img src="img/products1/L2.jpg" alt="">
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
                <img src="img/products1/L3.jpg" alt="">
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
                <img src="img/products1/K3.jpg" alt="">
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
                <img src="img/products1/K4.jpg" alt="">
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
        </div>
    </section>

    <section id="banner" style= "background-image: url(img/banner/b2.jpg);" class="section-m1">
        <h4 style="font-weight: bold;">Repair Services </h4>
        <h2 style="font-weight: bold;">Up to <span>70% off </span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2 style="font-weight: bold;">New Arrivals</h2>
        <p>#New Summer Collection 2022</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products1/s1.jpg" alt="">
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
                <img src="img/products1/L4.jpg" alt="">
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
                <img src="img/products1/L5.jpg" alt="">
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
                <img src="img/products1/m6.jpg" alt="">
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
                <img src="img/products1/L6.jpg" alt="">
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
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box" style= "background-image: url(img/banner/b17.jpg);">
            <h4 style="font-weight: bold;">crazy deals</h4>
            <h2 style="font-weight: bold;">buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at fasion land</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box" style= "background-image: url(img/banner/b10.jpg);">
            <h4 style="font-weight: bold;">spring/summer</h4>
            <h2 style="font-weight: bold;">upcoming season</h2>
            <span>The best classic dress is on sale at fasion land</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box" style= "background-image: url(img/banner/b7.jpg);">
            <h2 style="font-weight: bold;">SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box" style= "background-image: url(img/banner/b4.jpg);">
            <h2 style="font-weight: bold;">NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box" style= "background-image: url(img/banner/b18.jpg);">
            <h2 style="font-weight: bold;">T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
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
    <!-- Home Section end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"   
                            crossorigin="anonymous"></script>
</body>
</html>