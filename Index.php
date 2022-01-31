   <?php

        // file inc //
$page = "index";
$cssLink = "css/style.php";
$propiclink = "img/profile/pic/";
$logoLink = "img/LOgo.png";
$coverpicLink = "img/Cover.jpg";
$Cover2 = "img/Cover2.jpg";

// Menu Link //
$homeLink = "dashboard.php";
$smsLink = "dashboard/massage.php";
$logoutlink = "logout.php";

/* login systen start */
session_start();

if(!empty($_SESSION["username"])){
    $logincookie = $_SESSION["username"];

    require_once 'headerandfooter/headerlogin.php';
    header("location: dashboard.php");


}elseif (!empty($_COOKIE["username"])) {
  $logincookie = $_COOKIE["username"];
  require_once 'headerandfooter/headerlogin.php';
  header("location: dashboard.php");
}


else{
    require 'headerandfooter/header.php';

}




if(!empty($_REQUEST["loginfaild"])){
    $loginfaild = $_REQUEST["loginfaild"];
}
else{

}

        /* login systen end */



        ?>
        <div class="notes">
            <div class="noteg">
                <img src="img/cal.png">
                <h2>
                    ক্যালকুলেটর হিসাব
                </h2>

            </div>
            <div class="noteg">
                <img src="img/Notebook.jpg">
                <h2>
                    পারিবারিক খাতা
                </h2>

            </div>
            <div class="noteg">
                <img src="img/Notebook2.jpg">
                <h2>
                    শ্রমিকের খাতা
                </h2>

            </div>
            <div class="noteg">
                <img src="img/notes.jpeg">
                <h2>
                   ব্যাবসায়ী খাতা
                </h2>

            </div>


        </div>


         <hr color="black">
         <div class="hr">
             <hr color="black">
            <h3 class="headline"><font>  আপনার ব্যবসার হিসাব হয়ে যাক আরও স্মার্ট </font> </h3>
             <hr color="black">
        </div>





<?php        require 'Headerandfooter\Footer.php'; ?>
