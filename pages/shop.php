<?php
require "../includes/config.php";
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Shop – Plant and Flowers</title>
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
    <div class="mask">
      <div class="loader">  </div>
    </div>
    <script type="text/javascript">
    let mask = document.querySelector('.mask');

    window.addEventListener('load', () => {
      mask.classList.add('hide');
      setTimeout(() => {
        mask.remove();
      }, 600);
    })

    </script>
    <?php include "../includes/menu.php"; ?> <!--шапка-->
   <div class="content">
                  <div class="sblock1">
                           <p class="namesliderc">Shop</p></br>
                           <p class="nameslidercu"><a href="../home.php">Home</a>   /   <span class="hcu"> Shop</span></p>
                  </div>
                  <h1 class="dap">Our products</h1>
                  <div class="polosad"></div>
                  <div class="filter">
                        <button type="filter">Размер</button>
                  </div>
                  <div class="article_field">
                    <?php
                        $shopPHP = mysqli_query($connection, "SELECT * FROM `shop`");
                    ?>
                    <?php
                        while ( $plant = mysqli_fetch_assoc($shopPHP) )
                        {
                          ?>
                    <div class="shop_block">
                            <div class="imgflow"><a href="tovar.php?id=<?php echo $plant['id']; ?>"><img src="../images/<?php echo $plant['images']; ?>" class="flo"></a><br></div>
                            <div class="shape"><a href="tovar.php?id=<?php echo $plant['id']; ?>"><?php echo $plant['name']; ?></a></div>
                            <div class="doll"><?php echo $plant['price']?> $</div>
                            <div class="add"><a href="add_to_basket.php?id=<?php echo $plant['id']; ?>"><input type="submit" value="ADD TO CART" class="add_button"></a></div>
                    </div>
                  <?php
                  }
                 ?>
                  </div>
                  <p class="info1">Flower delivery is a popular service that will help to make a
                      pleasant surprise for colleagues or just to cheer up your loved ones!
                      Using this service is quite simple!
                      You just need to choose your favorite bouquet or floral arrangement and
                      arrange on our website. Flowers are delivered on the day of ordering by our own courier service.In our online store there are always fresh flowers,
                      a huge variety of classic and exclusive compositions, fast delivery and
                      a creative approach to the design of bouquets. The
                      shop is a simple order form, quality service and the largest selection of
                      flowers in the city! An order is made once, we have regular customers! Delight close flowers, give emotions!</p>
   </div>

            <footer>
            <div class="footshop">
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
