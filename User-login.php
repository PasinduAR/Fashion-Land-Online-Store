<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
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

    section{
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        border: 1px solid #000;
    }
    section .imgBx{
        position: relative;
        width: 50%;
        height: 100%;
    }
    section .imgBx:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(225deg,#e91e63,#03a9f4);
        z-index: 1;
        mix-blend-mode: screen;
    }
    section .imgBx img{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    section .contentBx{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: 100%;
    }
    section .contentBx .formBx{
        width: 50%;
    }
    section .contentBx .formBx h2{
        color: #088178;
        font-weight: 600;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #ff4584;
        display: inline-block;
        letter-spacing: 1px;
        line-height: 30px;
    }
    section .contentBx .formBx .inputBx{
        margin-bottom: 20px;   
    }
    section .contentBx .formBx .inputBx span{
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #088178;
        font-weight: 300;
        font-size: 16px;
        letter-spacing: 1px;
    }
    section .contentBx .formBx .inputBx input{
        width: 100%;
        padding: 10px 20px;
        outline: none;
        font-weight: 400;
        border: 1px solid #607d8b;
        font-size: 16px;
        letter-spacing: 1px;
        color: #607d8b;
        background: transparent;
        border-radius: 30px;
    }
    section .contentBx .formBx .inputBx input[type="submit"]{
        background: #088178;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
    }
    section .contentBx .formBx .inputBx input[type="submit"]:hover{
        background: #077a72;
    }
    section .contentBx .formBx .remeber{
        margin-bottom: 10px;
        color: #088178;
        font-weight: 400;
        font-size: 14px;
    }
    section .contentBx .formBx .inputBx p{
        color: #607d8b;
    }
    section .contentBx .formBx .inputBx p a{
        color: #ff4584;
    }
    section .contentBx .formBx h4{
        color: #607d8b;
        text-align: center;
        margin: 80px 0 10px;
        font-weight: 500;
    }
    section .contentBx .formBx .sci{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .contentBx .formBx .sci li{
        list-style: none;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #607d8b;
        border-radius: 50%;
        margin: 0 7px;
        cursor: pointer;
    }
    section .contentBx .formBx .sci li:hover{
        background: #ff4584;
    }
    section .contentBx .formBx .sci li i{
        transform: scale(1.3);
        filter: invert(1);
    }

</style>

</head>
<body>

<!-- Navigation Bar -->

<div id="header"></div>

    
<section class="col-md-9 mx-auto mt-5">
    <div class="imgBx">
        <img src="img/login/op5.jpg" alt="">
    </div>
    <div class="contentBx">
        <div class="formBx">
            <h2>Login</h2>
            <form method="POST" action="loginProcess.php">
                <div class="inputBx">
                    <span>Email</span>
                    <input type="text" name="email">
                </div>
                <div class="inputBx">
                    <span>Password</span>
                    <input type="password" name="password">
                </div>
                <div class="remember">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <div class="inputBx">
                    <input type="submit" value="Sign in" name="login">
                </div>
                <div class="inputBx">
                    <p>Don't have an account? <a href="#">Sign Up</a></p>
                </div>
            </form>
            <h4>Login with social media</h4>
            <ul class="sci">
                <li><i class="fa-brands fa-facebook-f"></i></li>
                <li><i class="fa-brands fa-twitter"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
            </ul>
           
        </div>
    </div>
</section>

<!-- Footer -->    
<?php include('footer.html'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"   
                            crossorigin="anonymous"></script>
</body>
</html>