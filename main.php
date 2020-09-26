<?php
session_start();
if(empty($_SESSION["name"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Digital Contracts</title>
    <link rel="stylesheet" href="contracts.css">
</head>
<body>
    <header>
    
    <div class="logo-container"><p>DIGITAL</p><p>CONTRACTS</p></div>
    <div class="flex1">
        <div class='ctg-cnt'><a href="index.php">Home</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="about.php">About</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="services.php">Services</a>
        <div class="ctg-hover"></div>
        </div>
        <div class='ctg-cnt'><a href="#" class="contactScroll">Contacts</a>
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

        <div class="login-cnt">
            <a href="index.php">Login</a>
        </div>

    <div class="register-cnt">
            <a href="registration.php">Sign Up</a>
        </div>

        </div>

        <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

    </header>
    <div class="sidebarCnt">
    <div class="flex2Mob">

        <div class="login-cnt">
            <a href="index.php">Login</a>
        </div>

        <div class="register-cnt">
            <a href="registration.php">Sign Up</a>
        </div>

    </div>

    <div class="flex1Mob">
        <div class='ctg-cnt'><a href="index.php">Home</a>
        
        </div>
        <div class='ctg-cnt'><a href="about.php">About</a>
        
        </div>
        <div class='ctg-cnt'><a href="services.php">Services</a>
        
        </div>
        <div class='ctg-cnt'><a href="#" class="contactScroll">Contacts</a>
        
        </div>
        <div class='ctg-cnt'><a href="#">Attorneys</a>
        
        </div>
        <div class='ctg-cnt'><a href="#">Bureaus</a>
        
        </div>

    </div>

</div>
    <div class="sideCover"></div>
<?php }?>


<?php if (!empty($_SESSION["name"])) { ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Digital Contracts</title>
    <link rel="stylesheet" href="digital.css">
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
        <div class='ctg-cnt'><a href="#" class="contactScroll">Contacts</a>
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
        <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <div class="sidebarCnt">
    <div class="flex2Mob">

    <div class="login-cnt" style="margin-right: 30px;">
            <a href="private.php?logout">Logout</a>
        </div>



    </div>

    <div class="flex1Mob">
        <div class='ctg-cnt'><a href="private.php">Home</a>
        
        </div>
        <div class='ctg-cnt'><a href="about.php">About</a>
        
        </div>
        <div class='ctg-cnt'><a href="services.php">Services</a>
        
        </div>
        <div class='ctg-cnt'><a href="#" class="contactScroll">Contacts</a>
        
        </div>
        <div class='ctg-cnt'><a href="#">Attorneys</a>
        
        </div>
        <div class='ctg-cnt'><a href="#">Bureaus</a>
        
        </div>

    </div>

</div>


<div class="sideCover"></div>
<?php }?>
<script src="jquery.min.js"></script>
<script src="contracts.js"></script>