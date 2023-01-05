<?php
session_start();
?>
<html>

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Story online shop</title>
    <link rel="stylesheet" href="cart.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="Header.css" />


    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        $(function() {
            $('a').each(function() {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('active');
                    $(this).parents('li').addClass('active');
                }
            });
        });
    </script>

</head>

<body>

    <section id="nav">
        <img id="img1" src="Title.webp" alt="Story_img">
        <div id="d1">
            <ul id="navbar">
                <li>
                    <div id="srch-bar">
                        <input id="bar" type="text" placeholder="search" />
                        <button type="button" id="srch" formaction="/submit"><img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-21.png" alt="search" width="10px" height="10px"></button>
                    </div>
                </li>
                <li><a href="home.php">Home</a></li>
                <li><a href="featured.php">Shopping</a>
                    <div id="sup-menu" class="dropdown">
                        <ul>
                            <li><a href="featured.php">featured</a></li>
                            <li><a href="categories.php">categories</a></li>
                        </ul>
                    </div>
                </li></a>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>



                <li><a href="profile.php"><img id="img2" src="user.png" />
                        <div id="sup-menu">
                            <ul>
                                <li><a id="a2" href="register.php">SignIn</li>
                    </a>
                <li><a id="a2" href="sign-up.php">SignUp</li></a>
            </ul>
        </div>
        </li></a>
        <li><a href="cart.php"><img id="img2" src="cart.webp" /></li></a>
        </ul>
        </div>
    </section>

    <section id="cart-home" class="cart-home">
        <div>
            <p id='p1' class="t1"> Shopping cart</p>
        </div>
        <br>
        <br>
    </section>
    <section id="cart-container" class="cart-cortainer">
        <table width="80%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <?php
                global $tbset;
                global $quantity;
                $totalsum = 0;
                for ($i = 1; $i <= 10; $i++){
                    $quantity = $quantity - $quantity;
                    $nmstr = "name" . $i;
                    $prstr = "price" . $i;
                    $imgstr = "image" . $i;
                    if (!empty($_SESSION[$nmstr])){
                    echo'<tr><td>
                    <form action="" method="post">
                        <button type="submit" name="del" value="'.$i.'" style="background-color: transparent; border: 0px;"><img src="trash.png" height="50px" alt=""></button>
                    </form>
                    </td><td><img src "'.$_SESSION[$imgstr].'"></img></td><td>'.$_SESSION[$nmstr].'</td><td>'.$_SESSION[$prstr].'</td><td><form action="" method="post"><input type="number" name="no" id="input" width="20px"></form></td><td>'.$_SESSION[$prstr] * quantity().'</td>';
                        $totalsum = $totalsum + $_SESSION[$prstr] * quantity();             
                        $tbset = 1;
                }
                    
                }
                ?>
                <img src="/images/Blouse.jpg" alt="">
                <?php

                if (isset($_POST['del'])) {
                    $delstr = $_POST['del'];
                    unset($_SESSION['name' . $delstr]);
                }
                global $quantity;
                function quantity(){
                    if (isset($_POST['no'])) {
                    $quantity = $_POST['no'];
                    return $quantity;
                }else{
                        return 1;
                }
                    
                }
                ?>
                <?php
                
                ?>
                
                
            </tbody>
        </table>
    </section>
    <br>

    <?php
            if($tbset == 1){
                echo '<form action="" method="post" position: relative; style="left: 500px;">
                        <button type="submit" position: relative; style="left: 500px;"  name="clear" left>clear cart</button>
                    </form>';
            }
            
           if (isset($_POST['clear'])){
        session_destroy();
           }
?>
    <br>
    
    <section id="cart-bot" class="cart-container">
        <div class="row">
            <div id="Coupon" class="Coupon col-lg-6 col-mg-6 col-12">
                <h5>COUPON</h5>
                <p>Enter your coupon code if you have one </p>
                <input type="text " placeholder="Coupon code">
                <button type="submit">APPLY COUPON</button>
            </div>
            <div id="Total" class="Total">
                <h5>CART TOTAL</h5>
                <div id="s2" class="d-flex justify-content-between">
                    <h6>Shipping </h6>
                    <p id="shp"><?php
                    $ship = 200;
                    $totalsum = $totalsum + $ship;
                    echo "$".$ship.".00";
                    ?></p>
                </div>
                <hr class="second-hr">
                <div class="d-flex justify-content-between">

                    <div id="s2">
                        <h6>Total </h6>
                        <p id="tot"><?php echo "$".$totalsum .".00" ?></p>
                    </div>
                    <button id="chkbtn"><a href="checkout.php" style="color: white;"> Proceed to checkout </a></button>
                </div>

            </div>

        </div>
    </section>

    <footer class="mt-5 py-5">

        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <img id="imga1" src="Title.webp" alt="Story_img" width="150px">
                <p id="pd1">Trusted by millions of businesses worldwide
                    Shopify handles everything from marketing and payments, to secure checkout and shipping
                    Brands that use Shopify</p>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                <h5 class="pb-2">contact us</h5>
                <div>
                    <h6 class="text-uppercase">address</h6>
                    <p>123 STREET NAME, CITY, EG </p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(123) 456 789</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>MAIL@EXAMPLE.COM</p>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">Founders</h5>
                <div class="row">
                    <ul>
                        <li>Omar Hashim</li>
                        <li>Ahmed Khalid</li>
                        <li>Fares Tarek</li>
                    </ul>
                </div>
            </div>
            <div class="footer-one col-lg-3 col-md-6 col-12">
                <h5 class="pb-2">instagram</h5>
                <div class="row">
                    <img class="img-fluid w-25 h-100 m-2" src="https://i.pinimg.com/originals/b9/a9/a4/b9a9a4f3dab5cd9beb5d7c8d91b84445.jpg">
                    <img class="img-fluid w-25 h-100 m-2" src="https://i.pinimg.com/originals/a9/03/49/a90349617102cf2d7fa7aa6f0515efed.jpg">
                    <img class="img-fluid w-25 h-100 m-2" src="https://images.squarespace-cdn.com/content/v1/547a3834e4b053a861c4874e/1624219205079-2MV5PECBTTNFHIIYC8SX/Sustainably+Chic+%7C+Sustainable+Fashion+Blog+%7C+Sustainable+and+Ethical+Clothing+Brands+for+Men.jpg?format=1000w">
                    <img class="img-fluid w-25 h-100 m-2" src="https://nextluxury.com/wp-content/uploads/fashion-mens-trendy-outfits.jpg">
                    <img class="img-fluid w-25 h-100 m-2" src="https://nextluxury.com/wp-content/uploads/mens-clothing-trendy-outfits-styles-navy-dress-shirt.jpg">
                </div>
            </div>
        </div>
        <div class="copyright mt-5 ">
            <div class="row container mx-auto">
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img class="img-fluid w-50 h-125 m-2" src="https://i.ytimg.com/vi/i09C02151PI/maxresdefault.jpg">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                    <p id="st1">story online shopping 2022. all right reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>