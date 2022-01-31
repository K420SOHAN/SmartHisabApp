<?php
// file inc //
$page = "Shop";
$cssLink = "css/style.php";
$propiclink = "img/profile/pic/";
$logoLink = "img/LOgo.png";
$coverpicLink = "img/Cover.jpg";
$Cover2 = "img/Cover2.jpg";

// Menu Link //
$homeLink = "#";
$smsLink = "dashboard/massage.php";
$logoutlink = "?logout=ok";
$signinlink = 'signin.php';


/* login systen Active start V.0.1 */

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

/* login systen Active end */


?>



<hr color="black">

<div class="productbtn">
    <a href="Dashboard/AddShop.php">নতুন দোকান যোগ</a>

</div>
<hr color="black">

<div class="Shopg">
  <?php
  $ii = 1;
  $Dokanquery = "SELECT * FROM `dokan` WHERE `OwnerID` = $userbdid";
  $runDokanquery = mysqli_query($connect , $Dokanquery);
  while($DokanData = mysqli_fetch_array($runDokanquery)){
  ?>
  <a href='Shop.php?Shopid=<?php echo $DokanData["Id"]  ;?>&Catagory=<?php echo $DokanData["Catagory"]  ;?>'><div class="Shop">
          <div class="divima">
            <h2 class="dnumber"><?php echo $ii ;?></h2>
            <img src="img/dokan/<?php echo $DokanData["CoverPic"] ;?>" alt="">
          </div>

       <h3><?php echo $DokanData["Name"] ;?></h3>

       <h4><?php echo $DokanData["Country"] ;?></h4>
       <a class="dbtn" href='Shop.php?Shopid=<?php echo $DokanData["Id"]  ;?>&Catagory=<?php echo $DokanData["Catagory"]  ;?>'>Open</a>
       <a class="dbtn" href="#">Edit / Delete</a>
  </div></a>
<?php  $DokanData["Id"];

   $DokanData["Catagory"];
   $DokanData["Country"];
   $DokanData["OwnerID"];
   $DokanData["ProfilePic"];
   $DokanData["CoverPic"];
   $DokanData["Reg_Time"];
   $ii++;
}

?>

</div>



<br>





<?php        require 'Headerandfooter\Footer.php'; ?>
