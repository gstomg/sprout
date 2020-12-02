<?php
require "../includes/config.php";
session_start();
$cart = unserialize($_COOKIE['cart']);
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Basket – Plant and Flowers</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">
</head>
<body>
    <?php require ($_SERVER["DOCUMENT_ROOT"]."/includes/code.php"); ?>
    <script src="../includes/code.js"></script>
    <?php include "../includes/menu.php"; ?> <!--шапка-->
    <div class="content">
          <div class="wrap">
                <div class="namebas">
                      <p class="namebasket">Basket</p>
                      <div class="polosar"></div>
                </div>
                <?php
                if(!empty($_COOKIE['cart'])){
                  echo '<p class="spisok_tovarov">Product list</p>';
                  foreach ($cart as $id => $count) {
                    $q = mysqli_query($connection, "SELECT * FROM `shop` WHERE id =$id");
                    $fetch = mysqli_fetch_assoc ($q);
                     $id = $fetch['id'];
                     $cost = $fetch['price'] * $count;
                     $total_cost=$total_cost + $cost;
                     $product_orders = $product_orders . ' ~~ ' . $fetch['id'] . '-id ||' . $fetch['name'] . '-name ||' . $fetch['price'] . '-sum ||' . $count . '-ea';
                 ?>
                <!--<p class="spisok_tovarov">Product list</p>-->
                <div class="prod">
                      <div class="one_prod">
                            <div class="left">
                                    <p class="name_prod"><?php echo '<span style="margin-right: 30px;">Product:</span>' . $fetch['name']?></p>
                                    <p class="count_prod"><?php echo '<span style="margin-right: 28px;">Quantity:</span>' . $count ?> - ea</p>
                            </div>
                            <div class="rigth">
                                    <p class="price">$<?php echo $fetch['price']  ?></p>

                            </div>
                      </div>

                </div>
                <?php
              } ?>
                  <p class="order_price">Order price: <?php echo $total_cost ?>$</p>
                  <p class="er"><a href="del_to_basket.php"><input type="submit" value="EMPTY THE BASKET" class="subc" ></a></p>
                  <p class="oinf">Ordering information</p>
                <div id="basket">
                  <form class="form"  method="POST" action="basket.php?id=<?php ?>#basket">
                            <?php

                            if (isset ($_POST['do_submit']) ) {

                                $name = $_POST['name'];
                                $surname = $_POST['surname'];
                                $email = $_POST['email'];
                                $nomer = $_POST['nomer'];
                                $adress = $_POST['adress'];
                                $id_product = $fetch['id'];


                                if ($name == '') {
                                    $errors[] =  'Enter your name!';
                                }
                                if ($surname == '') {
                                    $errors[] = 'Enter your surname!';
                                }


                                if ($email == '') {
                                    $errors[] = 'Enter your email!';
                                }

                                if (filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
                                    $errors[] = 'Email entered incorrectly!';
                                }
                                if ($nomer == '') {
                                    $errors[] = 'Enter your nomer!';
                                }
                                if ($adress === '') {
                                    $errors[] = 'Enter your delivery address!';
                                }

                                if(empty($errors)) {
                                    $contact = mysqli_query ($connection, "INSERT INTO `shop_basket` (name, surname, email, nomer, adress, product_orders, total_cost, date ) VALUES ('$name', '$surname', '$email', '$nomer','$adress' , '$product_orders', '$total_cost', NOW()) ");
                                    foreach ($cart as $id => $count ) {
                                $q = mysqli_query($connection, "SELECT * FROM `shop` WHERE id =$id");
                                $fetch = mysqli_fetch_assoc ($q);
                                 $id = $fetch['id'];
                                 $orsers_q = mysqli_query($connection, "UPDATE `shop` SET `shop_basket` = orders + $count WHERE `id` = $id");
                                 $amount_q = mysqli_query($connection, "UPDATE `shop` SET `amount` = amount - $count WHERE `id` = $id");
                            }
                                    echo '<span style="color: #80b435; text-decoration: underline; margin-left: 95px; "> Order sent, expect a call from the manager! </span>';

                                } else {
                                    echo '<strong style="color: red; text-decoration: underline ; margin-left: 95px; ">' . array_shift($errors) . '</strong>';
                                }

                            }

                            ?>
                            <div class="form_group">
                                <div class="registr">

                                    <div class="firstname">
                                        <p>First Name</p>
                                        <input name="name" type="text" placeholder="name">
                                    </div>
                                    <div class="firstsurname">
                                        <p>First Surname</p>
                                        <input name="surname" type="text" placeholder="surname">
                                    </div>
                                    <div class="imgpol">
                                        <img src="../images/1-6.jpg" alt="good">
                                    </div>
                                    <div class="email_basket">
                                        <p>Email</p>
                                        <input name="email" type="email" placeholder="email">
                                    </div>
                                    <div class="number_basket">
                                        <p>Phone Number</p>
                                        <input name="nomer" type="text" placeholder="phone number">
                                    </div>
                                    <div class="delad">
                                        <p>Delivery address</p>
                                        <input name="adress" type="text" placeholder="address">
                                    </div>

                                </div>
                            </div>
                            <div class="form_group">
                                <div class="submit">
                                    <input type="submit" class="subc" name="do_submit" value="СHECKOUT">
                                </div>
                            </div>
                  </form>
                  </div>



                  <?php
                  }    else{
                    echo "<p class='korzinapusta'> Cart is empty! </p>" . '<br>';
                  }
                  ?>
          </div>
    </div>
    <footer>
      <div class="foot_basket">
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
