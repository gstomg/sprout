<?php
require "../includes/config.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Delivery – Plant and Flowers</title>
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

    <div class="delivery">
      <div class="dblock1">
            <p class="nameslider">Delivery</p></br>
            <p class="nameslider2"><a href="../home.php">Home</a>   / <span class="hcu"> Delivery</span></p>
      </div>
      <div class="dblock2">
                  <h1 class="dap">Delivery and payment</h1>
                  <div class="polosad"></div>
                  <div class="deliveryblock1">
                                      <h2 class="timed">Time</h2>
                                      <div class="wdf">We deliver flowers from 8AM to 10PM.
                                      Our couriers deliver flowers as quickly as possible so that you can delight
                                      your loved ones with beautiful fresh bouquets, despite the distance.</div>
                                      <h2 class="pay">Payment</h2>
                                      <p class="pim">Payment is made in cash upon receipt of the order,
                                        however, if your order is a surprise, then you need to contact
                                        the administrator before placing the order.</p>
                  </div>
                  <div class="photo_blockd">
                        <img src="/images/product1.jpg">
                  </div>
                  <div class="deliveryblock2">
                                      <h2 class="cost">Cost</h2>
                                      <p class="fto">From $ 3, depending on the area of ​​the city,
                                         from $ 6 to the suburbs (Airport).</p>
                                      <h2 class="atten">Attention</h2>
                                      <p class="itd">If the delivery of a bouquet that is completely
                                         identical to the one shown on the specified day is not possible,
                                         our florists will contact you to arrange a flower replacement.</p>
                  </div>
      </div>
      </div>
    <footer>
            <div class="maps">
                      <p class="ssot">Sprout store on the map, waiting for you!</p>
                      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8c18b03e926415372ac24d76357e930b3cc11ea94c94fbee0b1fa45c7941469c&amp;width=100%25&amp;height=442&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <div class="">
                        <p class="hdwd">How do we deliver plants?</p>
                        <div class="polosadh"></div>
                        <ul class="fww">
                          <li>Flowers will be delivered to the recipient within 2 hours from the date of payment or at the time specified in the order, excluding holidays.
                            In any case, we make every effort to deliver even faster;</li>
                          <li>We deliver bouquets to our home, office, hotel.
      We guarantee you the freshness of the flowers delivered. If you have a complaint about the quality of the bouquets, let us know by phone 8 800 8000-800 or
      by e-mail infosprout@list.ru within 2 days from the date of delivery, and we will refund you the price of the bouquet or replace it;</li>
                          <li>When ordering delivery from us, you can be sure that the person who is important to you will receive a bouquet of
                            fresh flowers exactly in your hands, and you will be immediately notified via sms or e-mail message;</li>
            </div>

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
            <p>Copyright &copy; 2020 <a href="shop.php">Sprout</a> All Right Reserved.</p></div>
    </footer>
</body>
</html>
