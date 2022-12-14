<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Story online shop</title>
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="normalize.css" />
  <script type="text/javascript" src="Home.js"></script>
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" href="Header.css" />
  <script type="text/javascript" src="Header.js"></script>
  <meta charset="utf-8">

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


  <section id="s2">
    <!-- Slideshow container -->
    <div id="d2">
      <h5>trade-in-offer</h5>
      <h3>Super value Deals<br /></h3>
      <h4>On all our Products</h4>
      <button id="b1"><a id="a1" href="featured.php">shop now!</a></button>
    </div>
    <div id="slideshow-container" class="slideshow-container">
      <!-- Full-width images with number and caption text -->
      <div id="mySlides" class="mySlides">
        <!-- <div class="numbertext">1 / 3</div> -->
        <img src="shirt.jpg" style="width: 100%" height="50%" />

      </div>

      <div id="mySlides" class="mySlides">
        <!-- <div class="numbertext">2 / 3</div> -->
        <img src="jacket.jpg" style="width: 100%" height="50%" />

      </div>
      <div id="mySlides" class="mySlides">
        <!-- <div class="numbertext">2 / 3</div> -->
        <img src="pants2.jpg" style="width: 100%" height="50%" />

      </div>
      <div id="mySlides" class="mySlides">
        <!-- <div class="numbertext">2 / 3</div> -->
        <img src="shoe2.jpg" style="width: 100%" height="50%" />

      </div>

      <div id="mySlides" class="mySlides">
        <!-- <div class="numbertext">3 / 3</div> -->
        <img src="palaazo pants.webp" style="width: 100%" height="50%" />

      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <!-- The dots/circles -->
    <div id="dot" style="text-align: center">
      <span id="dot1" class="dot" onclick="currentSlide(1)"></span>
      <span id="dot1" class="dot" onclick="currentSlide(2)"></span>
      <span id="dot1" class="dot" onclick="currentSlide(3)"></span>
      <span id="dot1" class="dot" onclick="currentSlide(4)"></span>
      <span id="dot1" class="dot" onclick="currentSlide(5)"></span>
    </div>
  </section>

  <section>
    <div id="sec2">
      <div id="Small-container">
        <div id="po">
          <p id="p3">male</p>
          <a href="featured.php"> <img id="img3" src="male.jpg" alt="male" height="350"></a>
          <p id="p3">20% off</p>

        </div>
        <div id="po">
          <p id="p3">female</p>


          <a href="featured.php"> <img id="img3" src="woman.jpg" alt="male" width="100%" height="350"></a>
          <p id="p3">20% off</p>


        </div>
        <div id="po">
          <p id="p3">kids</p>


          <a href="featured.php"> <img id="img3" src="kids.jpg" alt="male" height="350"></a>
          <p id="p3">20% off</p>
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
        <h5 id="hh" class="pb-2">contact us</h5>
        <div>
          <h6 id="hhh" class="text-uppercase">address</h6>
          <p id="pd1">123 STREET NAME, CITY, EG </p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone</h6>
          <p id="pd1">(123) 456 789</p>
        </div>
        <div>
          <h6 class="text-uppercase">Email</h6>
          <p id="pd1">MAIL@EXAMPLE.COM</p>
        </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <h5 id="hh" class="pb-2">Founders</h5>
        <div class="row">
          <ul>
            <li>Omar Hashim</li>
            <li>Ahmed Khalid</li>
            <li>Fares Tarek</li>
          </ul>
        </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-12">
        <h5 id="hh" class="pb-2">instagram</h5>
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
          <p id="pd1">story online shopping 2022. all right reserved</p>
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