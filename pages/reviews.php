<?php
require "../includes/config.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reviews – Plant and Flowers</title>
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
            <div class="rblock1">
                  <p class="namesliderc">Reviews</p></br>
                  <p class="nameslidercu"><a href="../home.php">Home</a>   /   <span class="hcu"> Reviews</span></p>
            </div>
            <div class="rblock2">
                  <h1 class="dap">Reviews</h1>
                  <div class="polosar"></div>
                  <a href="#gf"><input type="submit" value="GIVE FEEDBACK" class="dog" ></a>
            </div>
            <div class="rew">
              <?php
                $reviews = mysqli_query($connection, "SELECT * FROM `reviews` ORDER BY id DESC");
              ?>
              <?php
                  while ( $people = mysqli_fetch_assoc($reviews) )
                  {
              ?>
                  <div class="tooop">
                        <div class="leftrew">
                              <img src="../images/<?php echo $people['image'];?>"  alt="src">
                        </div>
                        <div class="rigth">
                                  <div>
                                      <p class="namepeople"><?php echo $people['name'];?></p>
                                      <p class="dates"><?php echo $people['date'];?></p>
                                      <p class="text"><?php echo $people['textarea'];?></p>
                                </div>
                        </div>
                </div>
                  <?php
                  }
                 ?>
            </div>
            <div class="gf" id="gf">Give feedback</div>
            <div id="messages">

                        <form class="form" method="POST" action="reviews.php?id=<?php ?>#messages">
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
                            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false ) {
                                $errors[] = 'Email entered incorrectly!';
                            }
                            if( $_POST['textarea'] == '')
                            {
                              $errors[] = 'Enter text!';
                            }

                            if( empty($errors))
                            {
                            $connection = mysqli_connect('localhost', 'mysql', 'mysql', 'work'); // тут добавила
                            $contact = mysqli_query($connection, "INSERT INTO `reviews` (name, email, textarea) VALUES('".$_POST['name']."', '".$_POST['email']."',  '".$_POST['textarea']."')");
                              //вывод об отправке
                              echo '<span style="color: #80b435; font-weight: bold; display: block; margin-bottom:1.5em;"> Feedback sent successfully! </span>';
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
                                            <p>Your feedback</p>
                                            <textarea name="textarea" rows="10" cols="40" class="textarea"><?php echo $_POST['textarea']; ?>"</textarea>
                                            <input type="submit" value="GIVE FEEDBACK" class="dogs" name="do_post">
                </form> <?php // тут!! форму надо закрыть ?>

                        </div>

  </div>
  <footer>
  <div class="footcurt">
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
