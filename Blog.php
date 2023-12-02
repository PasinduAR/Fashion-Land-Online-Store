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

<style>
    /*      blog Page       */
/* page-header */

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
    background-image: url("img/banner/b19.jpg");
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

#blog {
    padding: 150px 150px 0 150px;
}
#blog .blog-box{
    display: flex;
    align-items: center;
    width: 100%;
    position: relative;
    padding-bottom: 90px;
}
#blog .blog-img {
    width: 50%;
    margin-right: 40px;
}
#blog img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}
#blog .blog-details {
    width: 50%;
}

/* Editing "CONTINUE READING" a tag*/
#blog .blog-details a{
    text-decoration: none;
    font-size: 11px;
    color: #000;
    font-weight: 700;
    position: relative;
    transition: 0.3s;
}
#blog .blog-details a::after {
    content: "";
    width: 50px;
    height: 1px;
    background-color: #000;
    position: absolute;
    top: 7px;
    right: -60px;
}
#blog .blog-details a:hover {
    color: #088178;
}
#blog .blog-details a:hover::after{
    background-color: #088178;
}
#blog .blog-box h1 {
    position: absolute;
    top: -55px;
    left: 0;
    font-size: 70px;
    font-weight: 700;
    color: #c9cbce;
    z-index: -9;
}


</style>
</head>
<body>
    <?php include('nav.php'); ?>
    
    <!-- blog Section start -->
    <section id="page-header" class="blog-header">  
        <div class="para">
            <h2>#readmore</h2>
            <p>Read all case studies about our products! </p>  
        </div>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodies</h4>
                <p>Kickstarter man braid godard coloring book. Reclete waistcoat selfies yr wolf chartreuse 
                    hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>How to Style a Quiff</h4>
                <p>Kickstarter man braid godard coloring book. Reclete waistcoat selfies yr wolf chartreuse 
                    hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Must-Have Skater Girl Items</h4>
                <p>Kickstarter man braid godard coloring book. Reclete waistcoat selfies yr wolf chartreuse 
                    hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Runway-Inspired Trends</h4>
                <p>Kickstarter man braid godard coloring book. Reclete waistcoat selfies yr wolf chartreuse 
                    hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b6.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>AW20 Menswear Trends</h4>
                <p>Kickstarter man braid godard coloring book. Reclete waistcoat selfies yr wolf chartreuse 
                    hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
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