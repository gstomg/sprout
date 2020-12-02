<?php
require "includes/config.php";
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $config['title']; ?></title>
    <!-- <meta http-equiv="Content-Security-Policy" content="script-src 'self'"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <!-- Optional - Adds useful class to manipulate icon font display -->
    <link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">
</head>
<body style="  height: 3150px;">

    
    <?php require ($_SERVER["DOCUMENT_ROOT"]."/includes/code.php"); ?>
    <script src="includes/code.js"></script>
    <?php include "includes/menu.php"; ?> <!--шапка-->
    <header>
        <div class="header_left">
                  <div class="slider_content">
                                      <div class="line1">AMAZING <br>FROM Sprout </div>
                                            <p class="houseplanth">HOUSEPLANT</p>
                                            <p class="acholce">AMAZING CHOLCE</p>
                                      <p class="inst">Discount 20% Off For Followers on Instagram.</p>
                                      <a class="button" href="/pages/shop.php">SHOP NOW </a>
                  </div>

        </div>
        <div class="header_right">
          <img src="images/10.png" height="100%" alt="flower">
            <!-- <img src="images/preview.jpg" height="100%" alt="flower"> -->
        </div>
    </header>

    <div class="preview">
        <div class="preview_image">
            <img src="images/2.png" height="100%" class="twopng">
        </div>
        <div class="preview_text">
            <p class="why">Why choose us?</p>
            <div class="polosa"></div>
            <p class="why2">In Sprout always nice prices. To please your beloved, express gratitude, congratulate a colleague is now easy!
Save and get positive emotions, delighting your family and friends!</p>

            <span class="pe-7s-sun pe-4x pe-spin"></span>
                  <div class="zagolovok1">Natural Sunlight</div>
                  <div class="onegrey">There are many variations of passages of lorem ipsum available, but the majority have suffered.</div>
            <span class="pe-7s-science pe-4x pe-spin"></span>
                  <div class="zagolovok2">Hand Planted</div>
                  <div class="twogrey">It is a long established fact that a reader will be distracted by the reable content of a page.</div>
            <span class="pe-7s-sun pe-4x pe-spin"></span>
                  <div class="zagolovok3">Clean Air</div>
                  <div class="threegrey">There are many variations of passages of lorem ipsum available, but the majority have suffered.</div>
        </div>
    </div>

    <article>
        <div class="vr"></div>
        <div class="article_title">OUR PRODUCTS</div>
        <div class="article_field">
            <?php
                $shop = mysqli_query($connection, "SELECT * FROM `shop` ORDER BY `id` DESC LIMIT 7");
            ?>
            <?php
                while ( $art = mysqli_fetch_assoc($shop) )
                {
                  ?>

            <div class="flower_block">
                    <div class="imgflow"><img src="images/<?php echo $art['images']; ?>" class="flo"><br></div>
                    <div class="shape"><?php echo $art['name']?></div>
                    <div class="doll"><?php echo $art['price']?> $</div>
            </div>
          <?php
          }
         ?>
        </div>
        <a href="/pages/shop.php"><input type="submit" value="SHOP NOW" class="shop_button"></a>
    </article>
    <aside>
        <div class="label_field">
            <div class="label">
                <span class="pe-7s-car pe-3x"></span>
                <div class="freeship1">Free shipping order</div>
                <div class="freeship2">On order over $30</div>
            </div>
            <div class="label">
              <span class="pe-7s-gift pe-3x"></span>
              <div class="freeship1">Special gift card</div>
              <div class="freeship2">The perfect gift idea</div>
            </div>
            <div class="label">
              <span class="pe-7s-refresh-2 pe-3x"></span>
              <div class="freeship1">Return & exchange</div>
              <div class="freeship2">Free return within 3 days</div>
            </div>
            <div class="label">
                <span class="pe-7s-call pe-3x"></span>
              <div class="freeship1">Support 24/7</div>
              <div class="freeship2">Customer support</div>
            </div>
        </div>
        <p class="infoinst">Instagram</p>
        <div class="photo_fieldh">
              <?php
                  $photo = mysqli_query($connection, "SELECT * FROM `gallery`");
              ?>
              <?php
                  while ( $artphoto = mysqli_fetch_assoc($photo) )
                  {
                    ?>

              <div class="flowergallery"><a href="https://www.instagram.com/ssprouttt/" target="_blank">
                      <div class="imgflow"><img src="images/<?php echo $artphoto['name']; ?>" class="flo"><br></div>
              </div></a>
            <?php
            }
           ?>
        </div>
    </aside>
    <footer>
    <div class="foot">
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
                    <li><a href="/pages/contact.php">Contact Us</a></li>
                    <li><a href="/pages/reviews.php">Reviews</a></li>
                    <li><a href="/pages/delivery.php">Delivery</a></li>
                </ul>
          </div>
          <div class="blockd3">
                <a href="/pages/shop.php"><p class="rout">SPROUT</p></a>
          </div>
          <div class="blockd4">
                <p>MY ACCOUNT</p>
                <div class="podcherk"></div>
                <ul class="mss">
                    <li><a href="#">My Account</a></li>
                    <li><a href="/pages/shop.php">Shop</a></li>
                    <li><a href="/pages/basket.php">Basket</a></li>
                </ul>
          </div>
          <div class="blockd5">
                <p>CUSTOMER SERVICE</p>
                <div class="podcherk"></div>
                <ul class="mss">
                    <li><a href="/pages/contact.php">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Returns</a></li>
                </ul>
          </div>
    </div>
    <div class="hr">
    <p>Copyright &copy; 2020 <a href="/pages/shop.php">Sprout</a> All Right Reserved.</p>
    </div>
  </footer>
</body>
</html>
