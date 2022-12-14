<html>

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Story online shop</title>
    <link rel="stylesheet" href="categories.css" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="Header.css" />

    <script src="shop.js"></script>
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
        <!--<button><img src="" alt=""></button>-->
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
    <!--<section id="side-bar">
        <ul id="sid-list">
            <li>men</li>
            <li>women</li>
            <li>kids</li>
        </ul>
    </section>-->
    <section class="content">

        <div id="brands">
            <h2 id="brhd"><a href="">Top Brands</a> </h2><br>
            <div id="dice">
                <div id="br1" class="zanim"><a id="ad" href=""><img src="nike.png" width="100px" height="100px" id="nike" alt=""></a></div>
                <div id="br2" class="zanim"><a id="ad" href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Adidas_Logo.svg/2560px-Adidas_Logo.svg.png" width="100px" height="100px" id="nike" alt=""></a></div>
                <div id="br3" class="zanim"><a id="ad" href=""><img src="https://upload.wikimedia.org/wikipedia/ar/archive/f/fe/20130809100511%21American-eagle-outfitters-logo.png" width="100px" height="100px" id="ae" alt=""></a></div>
                <div id="br4" class="zanim"><a id="ad" href=""><img src="https://i.pinimg.com/originals/5a/b3/a4/5ab3a47bb0888dfdd2d6fee3d765e0d2.png" width="100px" height="100px" id="usp" alt=""></a></div>
                <div id="br5" class="zanim"><a id="ad" href=""><img src="https://1000logos.net/wp-content/uploads/2017/02/Hollister-symbol.jpg" width="100px" height="100px" id="ho" alt=""></a></div>
                <div id="br6" class="zanim"><a id="ad" href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/CK_Calvin_Klein_logo.svg/640px-CK_Calvin_Klein_logo.svg.png" width="100px" height="100px" alt=""></a></div>
            </div>
        </div>
        <div id="tops">
            <h2 id="brhd"><a href="">Tops</a> </h2><br>
            <div id="dice">
                <div id="br1" class="zanim"><a id="ad" href=""><img src="https://media.istockphoto.com/id/1216414962/photo/black-male-jacket.jpg?s=612x612&w=0&k=20&c=q1MwlSLuBBlLVZbmkg9jRV0sO3a_SNslu904kD7TW_o=" id="suit" width="100px" height="100px" alt=""></a>
                    <p id="sts"><strong>Suits</strong></p>
                </div>
                <div id="br2" class="zanim"><a id="ad" href=""><img src="https://mobile.yoox.com/images/items/14/14091278SL_14_f.jpg?impolicy=crop&width=387&height=490" id="jum" width="100px" height="100px" alt=""></a>
                    <p id="jp"><strong>Jumpers</strong></p>
                </div>
                <div id="br3" class="zanim"><a id="ad" href=""><img src="https://m.media-amazon.com/images/I/71hlZVUtDuL._AC_UY1000_.jpg" width="100px" id="ss" height="100px" alt=""></a>
                    <p id="ssp"><strong>Sweatshirts</strong></p>
                </div>
                <div id="br4" class="zanim"><a id="ad" href=""><img src="https://img.abercrombie.com/is/image/anf/KIC_144-2069-1446-900_prod1?policy=product-medium&wid=350&hei=438" id="jacket" width="100px" height="100px" alt=""></a>
                    <p id="jc"><strong>jackets</strong></p>
                </div>
                <div id="br5" class="zanim"><a id="ad" href=""><img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA5L3JtMzYzLWIwOC1tb2NrdXAtMDEtam9iMTAwMy1sOGVobTlyYy5qcGc.jpg" width="100px" height="100px" id="tshrt" alt=""></a>
                    <p id="ts"><strong>T-shirts</strong></p>
                </div>
                <div id="br6" class="zanim">
                    <a id="ad" href=""><img src="https://contents.mediadecathlon.com/p1484240/ab565f3675dbdd7e3c486175e2c16583/p1484240.jpg" width="100px" height="100px" id="shrt" alt=""></a>
                    <p id="s"><strong>Shirts</strong></p>
                </div>
            </div>
        </div>
        <div id="bottoms">
            <h2 id="brhd"><a href="">Bottoms</a> </h2><br>
            <div id="bts">
                <div id="br1" class="zanim"><a id="ad" href=""><img src="https://cdni.llbean.net/is/image/wim/250265_30762_41?hei=1095&wid=950&resMode=sharp2&defaultImage=llbprod/A0211793_2" id="suit" width="100px" height="100px" alt=""></a>
                    <p id="sts"><strong>Jeans</strong></p>
                </div>
                <div id="br2" class="zanim"><a id="ad" href=""><img src="https://cdn.shopify.com/s/files/1/0472/6493/products/Moss-Flag-Fleece-Pants-IMG_4378_a43902c4-fcdb-46c0-a77f-33be15f3e2ab_600x.jpg?v=1638571360" id="jum" width="100px" height="100px" alt=""></a>
                    <p id="sp"><strong>Sweatpants</strong></p>
                </div>
                <div id="br3" class="zanim"><a id="ad" href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQV4SOEIoYzOFzi53nytQy02XZrl8oXiK7iPA&usqp=CAU" width="100px" id="ss" height="100px" alt=""></a>
                    <p id="pts"><strong>Pants</strong></p>
                </div>
                <div id="br4" class="zanim"><a id="ad" href=""><img src="data:image/jpeg;base64,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" id="jacket" width="100px" height="100px" alt=""></a>
                    <p id="jc"><strong>Shorts</strong></p>
                </div>
                <div id="br5" class="zanim"><a id="ad" href=""><img src="https://cdn.shopify.com/s/files/1/2987/0758/products/Como_Regular_Suit_Pants-Pants-LDM510030-3232-Grey_Melange-4_800x.jpg?v=1642771675" width="100px" height="100px" id="tshrt" alt=""></a>
                    <p id="sps"><strong>Suit Pants</strong></p>
                </div>
            </div>
        </div>
        <div id="accessories">
            <h2 id="brhd"><a href="">Accessories</a> </h2><br>
            <div id="acs">
                <div id="br1" class="zanim"><a id="ad" href=""><img src="https://m.media-amazon.com/images/I/31C4lAm7gVL._AC_SY1000_.jpg" id="suit" width="100px" height="100px" alt=""></a>
                    <p id="hdwr"><strong>Headwear</strong></p>
                </div>
                <div id="br2" class="zanim"><a id="ad" href=""><img src="https://cdn.shopify.com/s/files/1/0098/8515/5428/products/Dusk-Blackframewithdarktint_polarizedlenses_1100x.jpg?v=1649069294" id="jum" width="100px" height="100px" alt=""></a>
                    <p id="jp"><strong>Eyewear</strong></p>
                </div>
                <div id="br3" class="zanim"><a id="ad" href=""><img src="https://www.montblanc.com/variants/images/19971654706766190/A/w2500.jpg" width="100px" id="ss" height="100px" alt=""></a>
                    <p id="belts"><strong>Belts</strong></p>
                </div>
                <div id="br4" class="zanim"><a id="ad" href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJYV9tdrFDQ_CDn1csJmBzGW7zba4UbqiIag&usqp=CAU" id="jacket" width="100px" height="100px" alt=""></a>
                    <p id="jc"><strong>Bags</strong></p>
                </div>
                <div id="br5" class="zanim"><a id="ad" href=""><img src="data:image/jpeg;base64,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" width="100px" height="100px" id="tshrt" alt=""></a>
                    <p id="ts"><strong>Wallets</strong></p>
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