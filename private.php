<?php

include "main.php";
if(isset($_GET['logout'])){
    session_destroy();
    
    header("Location:index.php");
    exit();

}

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Digital Contracts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    
    <div class="logo-container"><p>DIGITAL</p><p>CONTRACTS</p></div>
    <div class="flex1">
        <div class='ctg-cnt'><a href="private.php">Home</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="about.php">About</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="services.php">Services</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="#">Contacts</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="#">Attorneys</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="#">Bureaus</a>
        <div class="ctg-hover"></div>
        </div>

    </div>
<div class="flex2">


        <div class="login-cnt" style="margin-right: 30px;">
            <a href="private.php?logout">Logout</a>
        </div>



        </div>
    </header> -->



<div class="asideHomeFlex">
<aside>

<div class="userGreet"><?php echo "Hi ". $_SESSION["name"]."!"; ?></div>

<ul>
    <li><a href="#">My BIO</a></li>
    <li><a href="#">History</a></li>
    <li><a href="#">In Progress</a></li>

</ul>

</aside>


<div class="privateHomeCnt">
<div class="privateHomePic"></div>

<div class="privateTitle"><h1>We Bring Comfort To Justice</h1></div>
</div>
<div class="homePicCover"></div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>