<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Featured</title>
  <link rel="stylesheet" href="featured.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="footer.css" />
  <link rel="stylesheet" href="Header.css">
  <script src="featured.js"></script>

  <!-- <link rel="stylesheet" href="Header.css" />      kataya zabat de b7eth t4t8l zy ba2y el sf7at 
    
    <script src="shop.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
      $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
        }); -->
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
  <div id="filter">
    <h2>Filter</h2>
    <h4>gender <button id="ard-btn" onclick="show1()"><i class="arrow down"></i></button></h4>
    <div class="gen-li">
      <ul class="filter-list">
        <li><input type="checkbox" name="men" id="mencheck" onclick="filter()"><label for="mencheck" onclick="filter()">Men</label></li>
        <li><input type="checkbox" name="women" id="womencheck" onclick="filter()"><label for="womencheck" onclick="filter()">Women</label></li>
        <li><input type="checkbox" name="boys" id="boyscheck" onclick="filter()"><label for="boyscheck" onclick="filter()">Boys</label></li>
        <li><input type="checkbox" name="girls" id="girlscheck" onclick="filter()"><label for="girlscheck" onclick="filter()">Girls</label></li>
      </ul>
    </div>

    <h4>type <button id="ard-btn" onclick="show2()"><i class="arrow down"></i></button></h4>
    <div class="type-li">
      <ul class="filter-list">
        <li><input type="checkbox" name="tops" id="topcheck" onclick="filter2()"><label for="topcheck" onclick="filter2()">Tops</label></li>
        <li><input type="checkbox" name="bottoms" id="bottomcheck" onclick="filter2()"><label for="bottomcheck" onclick="filter2()">Bottoms</label></li>
        <li><input type="checkbox" name="legwear" id="legcheck" onclick="filter2()"><label for="legcheck" onclick="filter2()">Legwear</label></li>
        <li><input type="checkbox" name="accessories" id="acccheck" onclick="filter2()"><label for="acccheck" onclick="filter2()">Accessories</label></li>
      </ul>
    </div>

    <h4>size <button id="ard-btn" onclick="show3()"><i class="arrow down"></i></button></h4>
    <div class="size-li">
      <ul class="filter-list">
        <li><input type="checkbox" name="small" id="scheck" onclick="filter3()"><label for="scheck" onclick="filter3()">S</label></li>
        <li><input type="checkbox" name="medium" id="mcheck" onclick="filter3()"><label for="mcheck" onclick="filter3()">M</label></li>
        <li><input type="checkbox" name="large" id="lcheck" onclick="filter3()"><label for="lcheck" onclick="filter3()">L</label></li>
        <li><input type="checkbox" name="xlarge" id="xlcheck" onclick="filter3()"><label for="xlcheck" onclick="filter3()">XL</label></li>
      </ul>
    </div>
    <h4>price range <button id="ard-btn" onclick="show4()"><i class="arrow down"></i></button></h4>
    <div class="price-range">
      <input type="range" id="range" max="5000" min="0" oninput="range()"><br>
      <input type="text" name="min" placeholder="minimum" id="min" class="pricetxt">
      <input type="text" name="max" placeholder="maximum" id="max" class="pricetxt">
    </div>
  </div>
  <!-- -------------------------Products--------------------------------------------------------------------------------------- -->
  <section class="products" id="unfiltered">

    <div id="Small-container">
      <div id="pr1" class="prod">
        <div id="top" class="men top s">
          <div class="link"><img src="shirt.jpg" alt="" height="227px" width="200px">
            <div class="inf">
              <h2>black jacket</h2>
              <h2>50.00$</h2>
            </div>
            <div id="sec2">

              <div id="po">
                <img id="img3" src="shirt.jpg" alt="male">
                <button id="button1" type="submit"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
                </button>
                <button id="button2">
                  size
                  <input id="input" type="number"></td>
                </button>
                <button id="button3">inStock</button>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="pr2" class="prod">
      <div id="bottoms" class="women bottoms l">
        <div class="link"><img src="pants.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>Blue Pants</h2>
            <h2>50.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="pants.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div id="pr3" class="prod">
      <div id="legwear" class="girls legwear m">
        <div class="link"><img src="lklok.webp" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>Shoe</h2>
            <h2>50.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="lklok.webp" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="pr4" class="prod">
      <div id="set" class="boys set s">
        <div class="link"><img src="Kid1.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>boy set</h2>
            <h2>200.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="Kid1.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="pr5" class="prod">
      <div id="legwear" class="girls legwear m">
        <div class="link"><img src="shoe.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>Red Shoe</h2>
            <h2>50.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="shoe.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>


    <br>




    <div id="pr6" class="prod">
      <div id="legwear" class="boys legwear l">
        <div class="link"><img src="shoe2.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>blue Shoe</h2>
            <h2>60.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="shoe2.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div id="pr7" class="prod">
      <div id="top" class="women top m">
        <div class="link"><img src="Blouse.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>Blouse</h2>
            <h2>50.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="Blouse.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div id="pr8" class="prod">
      <div id="top" class="men top m">
        <div class="link"><img src="short sleve shirt.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>short sleve shirt</h2>
            <h2>90.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="short sleve shirt.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>






    <div id="pr9" class="prod">
      <div id="bottoms" class="women bottoms l">
        <div class="link"><img src="palaazo pants.webp" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>Palazzo pants</h2>
            <h2>110.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="palaazo pants.webp" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>






    <div id="pr10" class="prod">
      <div id="unisex" class="unisex m">
        <div class="link"><img src="jacket.jpg" alt="" height="227px" width="200px">
          <div class="inf">
            <h2>yellow jacket</h2>
            <h2>70.00$</h2>
          </div>
          <div id="sec2">

            <div id="po">

              <img id="img3" src="jacket.jpg" alt="male">
              <button id="button1" type="submit"> Add to cart
                <img id="img2" src="cart2.png" alt="cart">
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <button id="button3">inStock</button>

            </div>
          </div>
        </div>
      </div>
    </div>









    </div>
  </section>
  <section id="filtersec">

  </section>
  <br><br><br><br><br><br><br><br><br><br><br><br>


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