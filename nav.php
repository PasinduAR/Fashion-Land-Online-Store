<?php
    error_reporting(0);
    session_start();
    include ('connect_db.php');
    $username = $_SESSION['cusname'];

    
    $cart = $_SESSION['cart'];
    $count = 0;
    $count = count($cart);

?>    

    <!-- Header start -->
            <header class="header">
                <div class="container">
                    <div class="header-main">
                        <div class="logo">
                            <img src="images/logo/c3.png" width="70px" alt="">
                        </div>
                        <div class="open-nav-menu">
                            <span></span>
                        </div>
                        <div class="menu-overlay">
                        </div>
                        <!-- Navigation menu start -->
                        <nav class="nav-menu">
                            <div class="close-nav-menu">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <ul class="menu">
                                <li class="menu-item">
                                    <a href="index.php">Home</a>       <!--class="high"- This code use to add a hover effect-->
                                </li>
                                <li class="menu-item">
                                    <a href="shop.php">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="Blog.php">Blog</a>
                                </li>
                                <!---
                                <li class="menu-item menu-item-has-children">
                                    <a href="collection.html" data-toggle="sub-menu">Collection <i class="plus"></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Men's clothes</a></li>
                                        <li class="menu-item"><a href="#">Women's clothes</a></li>
                                        <li class="menu-item"><a href="#">Kid's clothes</a></li>
                                    </ul>
                                </li>-->
                                <li class="menu-item menu-item-has-children">
                                    <a href="#" data-toggle="sub-menu">
                                    <?php
                            if(empty($username)){
                                echo "My Account";
                            }
                            else{
                             echo "Hello, " .$username;
                            }
                        ?>         
                                <i class="plus"></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="User-login.php">Login</a></li>
                                        <li class="menu-item"><a href="Register-form.php">Register</a></li>
                                        <li class="menu-item"><a href="wishlist.php">Wish List</a></li>
                                        <li class="menu-item"><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="aboutUs.php">About Us</a>
                                </li>
                              
                            </ul>
                        </nav>
                        <!-- Navigation menu end -->
                        <div class="icons">
                        <div class="cart-box" onmouseover="myOverFunction()"  onmouseleave="myLeaveFunction()">
                        <a href=""><i class="fa-sharp fa-solid fa-cart-shopping" >
                        <div class="cart-count">
                            <p><?php echo $count ?></p>
                        </div>
                    </i></a>
                        <div class="drop-down-cart"  id="first">
                            <table width="260px" style="align-items: center; justify-content: center; border-spacing: 10px;">
                     
                         <?php
                         $total = 0;
                         foreach($cart as $key => $value){
                         /*  echo $key . "<br>";*/
        
                          $sql = "select * from shop where id = '$key'";
                          $result = mysqli_query($con,$sql);
        
                          $row = mysqli_fetch_assoc($result)
              
                             ?>
                            
                                <tbody>
                                    <tr style="border-top: 1px solid #6f6e6b;">
                                        <td>
                                            <form action="sproduct.php"  method="GET">
                                            <button type="submit" style="width:60px; height:76px; border: none;">
                                                <input type="hidden" name="product_id" value="<?= $row['id']; ?>">
                                                <img src="img/products/<?php echo $row['image'];?>" width="80px" height="85px" style="object-fit: cover; border: 1px solid red;" alt="">
                                            </button>
                                           </form>
                                        </td>
                                        <td><p style="color: #000; text-align:center; padding-top: 5px; font-weight: 400; line-height: 1.6; font-size:12px; font-family:sans-serif;"><?php echo $row['name'];?></p><br><p style="color:#000; font-size:14px;font-family:sans-serif; font-weight: 500;" align="center">$<?php echo $row['price'];?></p></td>
                                    </tr>
                                </tbody>
                            <?php
                     
                                $total = $total + $row['price'];
                   
                            }
                        ?>
                                <tbody>
                                    <tr style="border-top: 1px solid #eee;">
                                        <td style=" border-top: 1px solid black; border-collapse: collapse; padding: 15px;"><h5 style="color: #000; text-align: center; font-size:17px; font-family:sans-serif; font-weight: 500; ">Total</h5></td>
                                        <td style=" border-top: 1px solid black; border-collapse: collapse; padding: 15px;"><h5 style="color: #000; text-align: right; font-size:17px; font-family:sans-serif; font-weight: 500;">$<?php echo $total;?></h5></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><a href="Cart.php"><button class="btn col-11 col-md-11 mx-auto mb-2 rounded-2 p-1"   style="background-color: rgb(143, 233, 18); color: #fff;">CART</button></a></td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><a href="checkout.php?total=<?php echo $total ?>"><button class="btn col-11 col-md-11 mx-auto mb-2 rounded-2 p-1" style="background-color: rgb(221, 22, 59); color: #fff;">CHECKOUT</button></a></td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                    
                     </div>
                            <a href="search.html" style="padding-top: 6px;"><i class="fa-solid fa-magnifying-glass"></i></a>
                       </div>
                </div>

            </header>
        <!-- Header end -->

        <script>
              const dropDowncart = document.getElementById('first');

    function myOverFunction(){
            
            dropDowncart.style.display = "block";     
    }
    function myLeaveFunction(){
        dropDowncart.style.display = "none";
    }
        </script>

        <script src="js/script.js"></script>
  