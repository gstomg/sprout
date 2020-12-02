<?php
require "../includes/config.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title><?php echo $config['title']; ?></title>
    <!-- <meta http-equiv="Content-Security-Policy" content="script-src 'self'"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">
</head>
<body>
    <?php require ($_SERVER["DOCUMENT_ROOT"]."/includes/code.php"); ?>
    <script src="../includes/code.js"></script>

    <?php include "../includes/menu.php"; ?> <!--шапка-->
    <div class="content">

      <?php
            $tovar = mysqli_query($connection, "SELECT * FROM `shop` WHERE `id` = " . (int) $_GET['id']);

       ?>
       <?php
            while ( $tovarshop = mysqli_fetch_assoc($tovar) )
            {
        ?>
          <div class="flowerphoto">
                <img src="../images/<?php echo $tovarshop['images']; ?>" class="floshop">
          </div>
          <div class="product_info">
                <p class="names"><?php echo $tovarshop['name'];?></p>
                <p class="prices"><?php echo $tovarshop['price'];?> $</p>
                <div class="texts"><?php echo $tovarshop['text'];?> </div>
                <div><a href="add_to_basket.php?id=<?php echo $tovarshop['id']; ?>"><input type="submit" value="ADD TO CART" class="tovar_button"></a></div>
          </div>
          <div>
                <div class="ymal"><p class="yymal">You may also like</p></div>
                <div class="article_fieldt">
                    <?php
                        $shop = mysqli_query($connection, "SELECT * FROM `shop` ORDER BY `id` DESC LIMIT 3");
                    ?>
                    <?php
                        while ( $art = mysqli_fetch_assoc($shop) )
                        {
                          ?>

                    <div class="flower_block">
                            <div class="imgflow"><a href="tovar.php?id=<?php echo $art['id']; ?>"><img src="../images/<?php echo $art['images']; ?>" class="flo"><br></a></div>
                            <div class="shape"><a href="tovar.php?id=<?php echo $art['id']; ?>"><?php echo $art['name']?></a></div>
                            <div class="doll"><?php echo $art['price']?> $</div>
                    </div>
                  <?php
                  }
                 ?>
                </div>
          </div>
          <?php
          }
         ?>
    </div>

    <footer>
    <div class="foottovar">
          <div class="blockd1">
                <p>OPENING TIME</p>
                <div class="podcherk"></div>
                <ul class="mss">
                    <li>Mon - Fri: 8AM-10PM</li>
                    <li>Sat: 9AM - 8PM</li>
                    <li>Suns: 14hPM-18hPM</li>
                </ul>
          </div>
          <div class="blockd2">
                <p>INFORMATION</p>
                <div class="podcherk"></div>
                <ul class="mss">
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="reviews.php">Reviews</a></li>
                    <li><a href="delivery.php">Delivery</a></li>
                </ul>
          </div>
          <div class="blockd3">
                <a href="shop.php"><p class="rout">SPROUT</p></a>
          </div>
          <div class="blockd4">
                <p>MY ACCOUNT</p>
                <div class="podcherk"></div>
                <ul class="mss">
                    <li><a href="#">My Account</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="basket.php">Basket</a></li>
                </ul>
          </div>
          <div class="blockd5">
                <p>CUSTOMER SERVICE</p>
                <div class="podcherk"></div>
                <ul class="mss">
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Returns</a></li>
                </ul>
          </div>
    </div>
    <div class="hr">
    <p>Copyright &copy; 2020 <a href="shop.php">Sprout</a> All Right Reserved.</p>
    </div>
  </footer>
  </body>
  </html>
