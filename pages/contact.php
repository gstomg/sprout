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
<body style=" height:1250px;">
    <?php require ($_SERVER["DOCUMENT_ROOT"]."/includes/code.php"); ?>
    <script src="../includes/code.js"></script>
    <?php include "../includes/menu.php"; ?> <!--шапка-->
   <div class="content">
            <div class="cblock1">
                  <p class="namesliderc">Contact Us</p></br>
                  <p class="nameslidercu"><a href="../home.php">Home</a>   /   <span class="hcu"> Contact Us</span></p>
            </div>
            <h1 class="dap">Contact and feedback</h1>
            <div class="polosad"></div>
            <div class="photochka">
                  <img src="../images/1.jpg" alt="swim">
            </div>
            <div class="aep">
                  <div class="podblock1">
                                <div class="home1">
                                                  <img src="../images/7.png" alt="home1">
                                </div>
                                <div class="texthome">
                                                  <p class="addresss">ADDRESS</p>
                                                  <p class="font"><span>Filand:</span>Via Cavour, 14 30026 Portogruaro Filand</p>
                                                  <p class="font"><span>France:</span>Contrada Isola 14, Macerata, 62100 France</p>
                                                  <p class="font"><span>Italia:</span>Silver-Ridge 14,62100 France</p>
                                </div>
                  </div>
                  <div class="podblock2">
                                <div class="letter2">
                                                  <img src="../images/8.png" alt="letter2">
                                </div>
                                <div class="textletter">
                                                  <p class="emaill">E - MAIL</p>
                                                  <a href=”mailto:info.flowers@mail.ru”>info.flowers@mail.ru</a>

                                </div>
                  </div>
                  <div class="podblock3">
                                <div class="phone3">
                                                  <img src="../images/9.png" alt="phone3">
                                </div>
                                <div class="textphone">
                                                  <p class="phonee">PHONE</p>
                                                  <a href="tel:+7 (8142) 33 22 11">+7(814)-233-22-11</a>

                                </div>
                  </div>
            </div>
            <div id="messages">
                        <form class="form" method="POST" action="contact.php?id=<?php ?>#messages">
                          <?php
                           if( isset ($_POST['do_post']) ) /*Если нажата клавиша отправки, то тд.*/
                          {
                            $errors = array();
                            if( $_POST['name'] == '') /*Проверка введения имени и тд.*/
                            {
                              $errors[] = 'Enter your name!';
                            }
                            if( $_POST['email'] == '')
                            {
                              $errors[] = 'Enter email!';
                            }
                            if( $_POST['phone'] == '')
                            {
                              $errors[] = 'Enter your phone!';
                            }
                            if( $_POST['subject'] == '')
                            {
                              $errors[] = 'Enter subject!';
                            }
                            if( $_POST['textarea'] == '')
                            {
                              $errors[] = 'Enter text!';
                            }

                            if( empty($errors))
                            {
                            $connection = mysqli_connect('localhost', 'mysql', 'mysql', 'work'); // тут добавила
                            $contact = mysqli_query($connection, "INSERT INTO `contact` (name, email, phone, subject, message) VALUES('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['subject']."', '".$_POST['textarea']."')");
                              //вывод об отправке
                              echo '<span style="color: #80b435; font-weight: bold; display: block; margin-bottom:1.5em;"> Message sent successfully! </span>';
                            }else
                            {//вывести ошибку
                              echo '<span style="color: red; font-weight: bold; display: block; margin-bottom:1.5em;">'.$errors['0'] .'</span>';
                            }
                          }
                          ?>
                                            <div class="fn">
                                                  <p>First Name</p>
                                                  <input type="text" name="name"  placeholder="name" size="40" class="texttest" value="<?php echo $_POST['name']; ?>" >
                                            </div>
                                            <div class="ec">
                                                  <p>E-mail</p>
                                                  <input type="text" name="email" placeholder="email" size="40" class="emailc" value="<?php echo $_POST['email']; ?>">
                                            </div>
                                            <div class="pc">
                                                  <p>Phone Number</p>
                                                  <input type="tel" name="phone" placeholder="phone number" size="40" class="phonec" value="<?php echo $_POST['phone']; ?>">
                                            </div>
                                            <div class="sc">
                                                  <p>Subject</p>
                                                  <input type="text" name="subject" placeholder="subject" size="40" class="subject" value="<?php echo $_POST['subject']; ?>">
                                            </div>
                                            <p>Your Message</p>
                                            <textarea name="textarea" rows="10" cols="40" class="textarea"><?php echo $_POST['textarea']; ?>"</textarea>
                                            <input type="submit" class="subc" value="SEND MESSAGE" name="do_post">
                </form> <?php // тут!! форму надо закрыть ?>

                        </div>

            <div class="maap">
                                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8c18b03e926415372ac24d76357e930b3cc11ea94c94fbee0b1fa45c7941469c&amp;width=560&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
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
            <div class="footcu">
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
