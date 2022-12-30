<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css%22%3E">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Story online shop registeration</title>
  <link rel="stylesheet" href="register.css" />
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="footer.css" />

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
  <form action="" method="POST" id="s2">
    <div id="d3">
      <h2 id="d4">Welcome To Story-eCommerce</h2>
      <h3>Sign-in To Get Amazing Offers!</h3>
    </div>
    <div id="f10">
      <label id="l1" for="email">&nbsp;&nbsp;E-mail &nbsp; &nbsp;</label>
      <input id="i1" name="email" type="email" class="email" placeholder="Email" /><br />
      <p id="V10">*please enter a valid User Email* </p>
    </div>

    <div id="f11">
      <label id="l2" for="password">Password&nbsp;</label>
      <input id="i2" name="password" type="password" class="password" placeholder="Password" min="6" max="20" /><br />
      <p id="V11">*please enter a valid Password* </p>
    </div>

    <button id="b" name="bt0" type="submit" class="button">Log In Now</button>

    <p id="p1"> Don't Have an Account? <a id="a1" href="sign-up.php">Sign-up Now!</a><br><br>
      <?php

      if (isset($_POST['bt0'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        if ($email != "") {
          $conn = mysqli_connect("localhost", "root", "", "storey");

          if (mysqli_connect_error())
            die("cannot connect to the database");

          $query = "SELECT email , password , username , address , phonenumber FROM users where email = '$email' and password = '$pass'";
          $rs = mysqli_query($conn, $query);
          $nrows = mysqli_num_rows($rs);

          if ($nrows > 0) {
            $row = mysqli_fetch_assoc($rs);
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['phonenumber'] = $row['phonenumber'];


            header('location: home.php');
          } else {
            echo "<p id='f0'>wrong email or password!</p>";
          }
          mysqli_close($conn);
        } else {
          echo "<p id='e1'>please enter your email!</p>";
        }
      }
      ?>
    </p>

  </form>
  <script type="text/javascript" src="sign_in.js"></script>

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