<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Blog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="footer.css">
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
    <!-- End -->
    <section id="blog">
        <div>
            <h1 id="hd1">Blogs</h1>
        </div>
        <div id="container">
            <div class="row">
                <div class="post">
                    <div class="post-image">
                        <img src="https://img.freepik.com/premium-photo/fashion-model-outdoor-portrait-tourist-woman-enjoying-sightseeing-lviv-girl-looking-ancient-atchitecture_106029-855.jpg?w=2000" width="500px">
                    </div>
                    <h3 id="hd3">New Summer Fashion 2022,<br> &nbsp;&nbsp;&nbsp; let's get a tour!</P>
                    </h3>
                    <p id="p1">September 9, 2022</p>
                </div>
                <div class="post">
                    <div class="post-image">
                        <img src="  Autumn-Fashion-696x469.jpeg" width="500px">
                    </div>
                    <h3 id="hd3">The best way to change the summer <br>
                        <P id="p0">wardrobe into autumn wardrobe.</P>
                    </h3>
                    <p id="p1">Novamber 15, 2022</p>
                </div>
                <div class="post">
                    <div class="post-image">
                        <img src="https://media.istockphoto.com/id/1169378197/photo/stylish-shopaholic-with-purchases.jpg?s=612x612&w=0&k=20&c=RGwdnF0wrWV8NNBawXAbzAHUe8sMBpLsEvIICLR9dM4=" width="500px">
                    </div>
                    <h3 id="hd3">Best summer Offers for this year!</h3>
                    <p id="p1">October 12, 2022</p>
                </div>
                <div class="post">
                    <div class="post-image">
                        <img src="https://cdn.luxe.digital/media/2019/09/12090415/business-casual-style-guide-men-luxe-digital.jpg" width="500px">
                    </div>
                    <h3 id="hd3">How to Dress casual for work </h3>
                    <p id="p1">March 4, 2022</p>
                </div>
            </div>

        </div>
    </section>
    <br>
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