<?php 
session_start();
?>
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
  <?php
$conn = new mysqli("localhost", "root", "","storey");
if(!$conn){
  die("Couldn't connect to database: " . mysqli_connect_errno());
}
$query1 = "SELECT * FROM products";
if ($result1 = mysqli_query($conn, $query1)){
  $row = mysqli_fetch_all($result1);
}
$query2 = "SELECT * FROM images";
if ($result2 = mysqli_query($conn, $query2)){
  $img = mysqli_fetch_all($result2);
}

/*if ($result = mysqli_query($conn, $query)){
  $row = mysqli_fetch_assoc($result);
  $nrows = mysqli_num_rows($result);
}$record = array(
  'prodID'=>array(),
  'name'=>array(),
  'price'=>array(),
  'stock'=>array(),
  'gender'=>array(),
  'type'=>array(),
  'size'=>array(),
);
  for($i = 0; $i < $row[prodID];$i++){
    $record[prodID] = $row[prodID][$i];
  }
  */
//$doc = new DOMDocument();
//$doc->loadHTML("featured.php");
/*$doc = new DOMDocument();
$doc->validateOnParse = true;
$doc->loadHTMLFile('featured.php');
//echo"the elemnt id tag is:".$doc->getElementById('name1')->tagName;
/*$doc->getElementById('name1')->tagName; 
$html->getElementById('name1')->nodeValue = 'New value';
$html->saveHTMLFile("foo.html");
*/
?>
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
          <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0]){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
            <div class="inf">
              <h2 ><?php echo $row[0][1]?></h2>
              <h2 ><?php echo $row[0][2].".00$"?></h2>
            </div>
            <div id="sec2">

              <div id="po">
                <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0]){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr1"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          
                
                
                <button id="button2">
                  size
                  <input id="input" type="number"></td>
                </button>
                <?php
                if($row[0][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>
               
                
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="pr2" class="prod">
      <div id="bottoms" class="women bottoms l">
        <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "blue pants"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[1][1]?></h2>
            <h2><?php echo $row[1][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "blue pants"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr2"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[1][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div id="pr3" class="prod">
      <div id="legwear" class="girls legwear m">
        <div class="link">
          <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "shoe"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[2][1]?></h2>
            <h2><?php echo $row[2][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "shoe"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr3"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              </button>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[2][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="pr4" class="prod">
      <div id="set" class="boys set s">
        <div class="link">
          <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "boy set"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[3][1]?></h2>
            <h2><?php echo $row[3][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "boy set"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr4"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[3][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>



    <div id="pr5" class="prod">
      <div id="legwear" class="girls legwear m">
        <div class="link">  <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "red shoe"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[4][1]?></h2>
            <h2><?php echo $row[4][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "red shoe"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr5"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[4][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>


    <br>




    <div id="pr6" class="prod">
      <div id="legwear" class="boys legwear l">
        <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "blue shoe"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[5][1]?></h2>
            <h2><?php echo $row[5][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "blue shoe"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr6"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[5][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div id="pr7" class="prod">
      <div id="top" class="women top m">
        <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "blouse"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[6][1]?></h2>
            <h2><?php echo $row[6][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "blouse"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr7"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[6][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>




    <div id="pr8" class="prod">
      <div id="top" class="men top m">
        <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "short sleeve shirt"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[7][1]?></h2>
            <h2><?php echo $row[7][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "short sleeve shirt"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr8"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[7][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>






    <div id="pr9" class="prod">
      <div id="bottoms" class="women bottoms l">
        <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "palazoo pants"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[8][1]?></h2>
            <h2><?php echo $row[8][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "palazoo pants"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr9"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[8][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>






    <div id="pr10" class="prod">
      <div id="unisex" class="unisex m">
        <div class="link"><?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "yellow jacket"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?>
          <div class="inf">
            <h2><?php echo $row[9][1]?></h2>
            <h2><?php echo $row[9][2].".00$"?></h2>
          </div>
          <div id="sec2">

            <div id="po">

              <?php
          $count = count($img);
          for($i=0; $i < $count; $i++){
            if($img[$i][3] == $row[$i][0] && $row[$i][1] == "yellow jacket"){
              echo '<img src="'.$img[$i][2].'" height="227px" width="200px"/>';
              break;
            }
          }
          ?><form action="" method="post">
            <button id="button1" type="submit" name="pr" value="pr10"> Add to cart
                  <img id="img2" src="cart2.png" alt="cart">
            </button>
          </form>
              <button id="button2">
                size
                <input id="input" type="number"></td>
              </button>
              <?php
                if($row[9][3] > 0){
                  echo '<button style="color: green; font-weight:bold">In Stock</button>';
                }else{
                  echo '<button style="color: red; font-weight:bold">Out Of Stock</button>';

                }
                ?>

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

  <?php
  if (isset($_POST['pr']) && $_POST['pr'] == 'pr1') {
    $_SESSION['name1'] = $row[0][1];
    $_SESSION['price1'] = $row[0][2];
    $_SESSION['image1'] = $img[0][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr2') {
    $_SESSION['name2'] = $row[1][1];
    $_SESSION['price2'] = $row[1][2];
    $_SESSION['image2'] = $img[1][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr3') {
    $_SESSION['name3'] = $row[2][1];
    $_SESSION['price3'] = $row[2][2];
    $_SESSION['image3'] = $img[2][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr4') {
    $_SESSION['name4'] = $row[3][1];
    $_SESSION['price4'] = $row[3][2];
    $_SESSION['image4'] = $img[3][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr5') {
    $_SESSION['name5'] = $row[4][1];
    $_SESSION['price5'] = $row[4][2];
    $_SESSION['image5'] = $img[4][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr6') {
    $_SESSION['name6'] = $row[5][1];
    $_SESSION['price6'] = $row[5][2];
    $_SESSION['image6'] = $img[5][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr7') {
    $_SESSION['name7'] = $row[6][1];
    $_SESSION['price7'] = $row[6][2];
    $_SESSION['image7'] = $img[6][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr8') {
    $_SESSION['name8'] = $row[7][1];
    $_SESSION['price8'] = $row[7][2];
    $_SESSION['image8'] = $img[7][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr9') {
    $_SESSION['name9'] = $row[8][1];
    $_SESSION['price9'] = $row[8][2];
    $_SESSION['image9'] = $img[8][2];
  }elseif (isset($_POST['pr']) && $_POST['pr'] == 'pr10') {
    $_SESSION['name10'] = $row[9][1];
    $_SESSION['price10'] = $row[9][2];
    $_SESSION['image10'] = $img[9][2];
  }
  ?>
  

</body>


</html>