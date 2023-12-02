<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Lobster&family=Montserrat:wght@300&family=Poppins:wght@100;300;400;500;600;700;800;900&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e0374b34cb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        /* Page Header */ 
#page-header {
    position: relative;
}
#page-header {
    width: 100%;
    height: 40vh;
    background-size: cover;
    display: flex;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    background-image: url("img/about/banner.png");
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

        .who-we{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "who-text who-img";
        }
        .who-text{
            grid-area: who-text;
            color: #000;
            padding: 45px 40px;
        }
        .who-text h3,p{
            font-family: 'Raleway', sans-serif;
        }
        .who-text h3{
            text-align: center;
            position: relative;
        }
        .who-text h3::after{
            content: "";
            position: absolute;
            background-color: red;
            bottom: -30%;
            left: 40%;
            width: 80px;
            height: 3px;
        }
        .who-text p{
            margin-top: 30px;
            line-height: 1.8;
            text-align: justify;
        }
        .who-img{
            grid-area: who-img;
            padding-left: 100px ;
        }
        .who-img img {
            width: 400px;
            height: 350px;
        }
       
        .mission{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "mission-img mission-text";
        }
        .mission-text{
            grid-area: mission-text;
            color: #000;
            padding: 45px 40px;
        }
        .mission-text h3,p{
            font-family: 'Raleway', sans-serif;
        }
        .mission-text h3{
            text-align: center;
            position: relative;
        }
        .mission-text h3::after{
            content: "";
            position: absolute;
            background-color: red;
            bottom: -30%;
            left: 40%;
            width: 80px;
            height: 3px;
        }
        .mission-text p{
            margin-top: 30px;
            line-height: 1.8;
            text-align: justify;
        }
        .mission-img{
            grid-area: mission-img;

        }
        .mission-img img {
            width: 400px;
            height: 350px;
        }
       
        .vision{
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "vision-text vision-img";
        }
        .vision-text{
            grid-area: vision-text;
            color: #000;
            padding: 45px 40px;
        }
        .vision-text h3,p{
            font-family: 'Raleway', sans-serif;
        }
        .vision-text h3{
            text-align: center;
            position: relative;
        }
        .vision-text h3::after{
            content: "";
            position: absolute;
            background-color: red;
            bottom: -30%;
            left: 40%;
            width: 80px;
            height: 3px;
        }
        .vision-text p{
            margin-top: 30px;
            line-height: 1.8;
            text-align: justify;
        }
        .vision-img{
            grid-area: vision-img;
            padding-left: 100px ;
        }
        .vision-img img {
            width: 400px;
            height: 350px;
        }

        .lists{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 40px;
        }
        .lists .card{
            padding: 40px 40px 30px 40px;
            border-radius: none;
        }
        .lists .card .card-img{
            display: flex;
            align-items: center;
            justify-content: center ;
        }
        .lists .card .card-img img{
            width: 45px;
            height: 42px;
        }
        .lists .card p{
            text-align: center;
            margin-top: 20px;
        }



        .our-members{
          background-image:url(images/review-bg-2.jpg);
          background-position: center;
          background-size: cover;
          width: 100%;
          min-height: 65vh;
        }
        .our-members .our-team{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .our-members .our-team .user-card{
            width: 260px;
            height: 300px;
            padding: 30px 30px;
            margin: 20px;
            background: #f2f3f7;
            box-shadow: 0.6em 0.6em 1.2em #030b78,
                        -0.5em -0.5em 1em #000000;
            border-radius: 20px;
        }
        .user-card .user-content{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .user-card .user-content .imgBx{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .user-card .user-content .imgBx img{
            top: 0;
            left: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .user-card .user-content .contentBx h4{
            color: #36187d;
            font-size: .9rem;
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
        }
        .user-card .user-content .contentBx h5{
            color: #6c758f;
            font-size: .8rem;
            font-weight: bold;
            text-align: center;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
        }
        .user-card .user-content .contentBx .sci{
            margin-top: 10px;
        }
        .user-card .user-content .sci a{
            text-decoration: none;
            color: #6c758f;
            font-size: 25px;
            margin: 10px;
            transition: color 0.4s;
        }
        .user-card .user-content .sci a:hover{
            color: #0196e3;
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

<div id="header"></div>


<!-- Page Header start -->
<section id="page-header" class="about-header">  
    <div class="para">
        <h2 style= "font-size: 46px; line-height: 54px;">#AboutUs</h2>
        <p style= "font-size: 16px; margin: 15px 0 20px 0;">Read all case studies about our products! </p>  
    </div>
</section>

<!-- About US start -->
<div class="who-we col-md-9 mt-5 mx-auto">
    <div class="who-text">
        <h3>Who We Are</h3>
        <p>THE FASHION STORE caters to thoughtful shoppers who appreciate unique designs and top 
            quality pieces you just can't find anywhere else. We are constantly curating fresh new 
            collections and looking for the next big thing our customers will love. we are proud to be 
            your Online Clothing Shop that you can rely on for our expert service and care. 
        </p>
    </div>
    <div class="who-img">
        <img src="img/about/banner01.jpg" alt="">
    </div>
</div>
<div class="mission col-md-9 mt-5 mx-auto">
<div class="mission-img">
        <img src="img/about/banner02.jpg" alt="">
    </div>
    <div class="mission-text">
        <h3>Our Mission</h3>
        <p>Our Mission is to make a difference through our branding by staying ahead of the
             fashion trends, defining style and giving customers what they want. 
        </p>
    </div>
</div>
<div class="vision col-md-9 mt-5 mx-auto">
    <div class="vision-text">
        <h3>Our Vision</h3>
        <p>Our Vision is to change the way our society connects with the fashion industry by 
            providing our customers with products that are ethically and responsibly sourced.
    </div>
    <div class="vision-img">
        <img src="img/about/b1.jpeg" alt="">
    </div>
</div>

<!-- Features start -->
<!--
<div class="lists col-md-10 mx-auto mt-5 mb-5">
    <div class="card">
        <div class="card-img">
           <img src="img/about/feature_icon_1.svg" alt="">
        </div>
        <p>Credit Card Support</p>
    </div>
    <div class="card">
    <div class="card-img">
           <img src="img/about/feature_icon_2.svg" alt="">
        </div>
        <p>Online Order</p>
    </div>
    <div class="card">
       <div class="card-img">
           <img src="img/about/feature_icon_3.svg" alt="">
        </div>
        <p>Free Delivery</p>
    </div>
    <div class="card">
      <div class="card-img">
           <img src="img/about/feature_icon_4.svg" alt="">
        </div>
        <p>Product with Gift</p>
    </div>
</div>-->
<section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6 style= "font-weight: 700; font-size: 12px;">Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6 style= "font-weight: 700; font-size: 12px;">Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6 style= "font-weight: 700; font-size: 12px;">Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6 style= "font-weight: 700; font-size: 12px;">Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6 style= "font-weight: 700; font-size: 12px;">Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6 style= "font-weight: 700; font-size: 12px;">F24/7 Support</h6>
        </div>
    </section>

<!-- Newsletter Start -->
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

<!--
<div class="our-members mt-5">
     <h2 style="color: #fff; text-align: center; font-family: 'Poppins', sans-serif; padding: 20px 0;">Our Team</h2>
    <div class="our-team">
       <div class="user-card">
            <div class="user-content">
                <div class="imgBx">
                    <img src="authors/2.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Bhanuka Senevirathna</h4>
                    <h5>Director General</h5>
                </div>
                <div class="sci">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="user-card">
            <div class="user-content">
                <div class="imgBx">
                    <img src="authors/user-1.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Mahel Chandupa</h4>
                    <h5>Developer</h5>
                </div>
                <div class="sci">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="user-card">
            <div class="user-content">
                <div class="imgBx">
                    <img src="authors/7.jpg" alt="">
                </div>
                <div class="contentBx">
                    <h4>Nimeshika Gamage</h4>
                    <h5>Ui Designer</h5>
                </div>
                <div class="sci">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
    -->

<?php include('footer.html'); ?>
    <!-- Home Section end -->

</body>
</html>