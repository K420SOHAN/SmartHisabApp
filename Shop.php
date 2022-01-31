<?php
// file inc //
$page = "Dashboard";
$cssLink = "css/style.php";
$propiclink = "img/profile/pic/";
$logoLink = "img/LOgo.png";
$coverpicLink = "img/Cover.jpg";
$Cover2 = "img/Cover2.jpg";

// Menu Link //
$homeLink = "#";
$smsLink = "Shop/massage.php";
$logoutlink = "?logout=ok";


/* login systen start */

        session_start();

        if(!empty($_SESSION["username"])){

          $logincookie = $_SESSION["username"];
            require 'headerandfooter/headerlogin.php';
        }
        elseif (!empty($_COOKIE["username"])) {

          require_once 'headerandfooter/headerlogin.php';
        }

else{
            header("location:signin.php");

        }

/* login systen end */









?>
<p> <a href="Dashboard.php">Dashboard</a> / <a>Shop</a></p>
<hr color="black">
        <div class="Catagory">
            <div class="catbox">
                <a href="Shop/ProductList.php"><img src="img/Notebook2.jpg"></a>
                <h3>
                    <a href="shop/ProductList.php">পণ্য লিস্ট</a>
                </h3>
            </div>

            <div class="catbox">
                <a href="shop/BuyAndSell.php"><img src="img/Notebook2.jpg"></a>
                <h3>
                    <a href="shop/BuyAndSell.php">ক্রয় ও বিক্রয়</a>
                </h3>
            </div>

            <div class="catbox">
                <a href="shop/RestAndDeposit.php"><img src="img/Notebook2.jpg"></a>
                <h3>
                    <a href="shop/RestAndDeposit.php">বাকি ও জমা</a>
                </h3>
            </div>

            <div class="catbox">
                <a href="shop/WagesOfWorkers.php"><img src="img/Notebook2.jpg"></a>
                <h3>
                    <a href="shop/WagesOfWorkers.php">শ্রমিকের বেতন</a>
                </h3>
            </div>

        </div>


        <hr color="black">



        </div>
<?php        require 'Headerandfooter\Footer.php'; ?>
