<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css" />
    <title>Contact</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <meta charset="utf-8">

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

    <!-- Navbar top -->
    <nav id="nav">
        <img id="img1" src="Title.webp" alt="Story_img">
        <div id="d1">
            <ul id="navbar">
                <div id="srch-bar">
                    <input id="bar" type="text" placeholder="search" />
                    <button type="button" id="srch" formaction="/submit"><img src="https://www.freeiconspng.com/thumbs/search-icon-png/search-icon-png-21.png" alt="search" width="10px" height="10px"></button>
                </div>
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
    </nav>

    <section id="content">
        <div class="cusservice">
            <div class="head">
                <h1 class="hedf">Contact Us</h1>
                <div id="parg">
                    <p>Feel Free To Send Us Your Feedback,Suggestions Or Complaints</p>
                </div>
            </div>
            <p id="V10">*please enter a valid User name* </p>
            <p id="v11">*please enter a valid User Email* </p>
            <p id="v12">*please enter a valid phone number* </p>
            <div class="form-group">
                <form name="contactform" method="POST" action="" class="contact" onsubmit="submission()">
                    <div class="field-block">
                        <label for="name" id="name"><strong>Name</strong></label>
                        <input type="text" class="form-control" id="namef" name="name">
                        <br>
                    </div>
                    <div class="field-block">
                        <label for="email" id="email"><strong>Email</strong></label>
                        <input type="email" class="form-control" id="email" name="email"><br>
                    </div>
                    <div class="field-block">
                        <label for="phoneno" id="phoneno"><strong>Phone no</strong></label>
                        <input type="text" class="form-control" id="phonenof" name="phoneno"><br>
                    </div>
                    <div class="msg-field">
                        <label for="message" id="message"><strong>Message</strong></label>
                        <textarea name="message" id="message-box" cols="30" rows="2"></textarea><br>
                    </div>
                    <div id="sub-btn" class="field-block">
                        <input type="submit" name="b0" value="Send" id="btn-sub" onclick="submission()"><br>
                    </div>
                </form>
            </div>
        </div>
        <div class="info">
            <h1>Info</h1>
            <ul id="info-list">
                <li>
                    <div id="enmail"><a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmXBnHBPDmRKqlJJCNmpsgzpKWmWctFjtsRpRfzxRPhPmjVhrbkJMQbnkPMQsQxxcJNdnL" target="_blank"><img src="envelope_8.png" alt="" id="limg" width="50px" height="20px"> </a>&emsp;<a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmXBnHBPDmRKqlJJCNmpsgzpKWmWctFjtsRpRfzxRPhPmjVhrbkJMQbnkPMQsQxxcJNdnL" target="_blank">info@getintouch.st</a></div>
                </li>
                <li>
                    <div id="dial">
                        <img src="icons8-ringer-volume-50.png" width="30px" alt="">
                        <div id="phonenos">
                            <p>01145589659</p>
                            <p>035755589</p>
                        </div>
                    </div>
                </li>
                <li> <img src="buildings.png" width="30px" height="30px" alt="">
                    <p id="strt">13,el-mosher st.,sidi gaber</p>
                </li>
                <li> <img src="clock.png" alt="" width="30px" height="30px" id="clock">
                    <p id="clck">9:00 - 18:00</p>
                </li>
            </ul>
        </div>
        <div id="socials">
            <div id="sch2">
                <h2>Social Media</h2>
            </div>

            <div class="card-body">

                <div class="social-media">
                    <span class="fa-stack fa-sm" id="fb-span">
                        <i class="fas fa-circle fa-stack-2x" id="face"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse" id="face"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x" id="twit"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse" id="twit"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x" id="inst"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse" id="inst"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x" id="what"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse" id="what"></i>
                    </span>
                </div>
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

    <?php

    if (isset($_POST['b0'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $message = $_POST['message'];
    }

    $conn = new mysqli("localhost", "root", "", "storey");

    if (mysqli_connect_error())
        die("cannot connect to database");

    $query = "INSERT INTO `customer_service` (`name`,`email`,`phoneno`,`message`)
    values ('$name','$email','$phoneno','$message')";

    mysqli_query($conn, $query);

    $query = "SELECT * from customer_service";
    if ($result = mysqli_query($conn, $query)) {

        $row = mysqli_fetch_array($result);
    }
    mysqli_close($conn);
    ?>
    <script>
        function submission() {
            var p = document.getElementById('submission');
            p.innerHTML = 'Thank you for submitting';
            p.style.color = 'red';
            alert('thanks for submitting');
        }
    </script>



</body>

</html>