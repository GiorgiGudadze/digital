<?php
include 'main.php';

$conn = mysqli_connect("localhost","giorgi","test123","digital");
if(!$conn){
    echo "connection error" . mysqli_connect_error($conn);
}

if(isset($_GET['logout'])){
    session_destroy();
    // exit();

}


$email=$password='';
$errors = array("passwordOrEmail"=>"");
if(isset($_POST["login"])){

    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors["passwordOrEmail"]="Email or Password is incorrect";
    }

    if(strlen($_POST["password"])<8){
        $errors["passwordOrEmail"]="Email or Password is incorrect";
    }

    if(!preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/",$password)  ){
        $errors["passwordOrEmail"]="Email or Password is incorrect";
    }

    if(empty($_POST["password"])){
        $errors["passwordOrEmail"] = "Email or Password is incorrect";
    }

    if(!empty($errors["passwordOrEmail"])){

    }

    else{

        $email = $conn->real_escape_string($_POST["email"]);
        $password = $conn->real_escape_string($_POST["password"]);
    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if($count > 0 ){

        // header("Location:services.php");
        // session_start();
        // $_SESSION["name"]=$usernameData;
        // $_SESSION["passwordSes"]=$userPassword;
        while($row = mysqli_fetch_assoc($result)){
            session_start();
             $_SESSION["name"]=$row['name'];
            header("Location:private.php");
        }
    }

    else{
        $errors["passwordOrEmail"]="User Doesn't Exist";
    }


    }

}

?>
<div class="homeCnt">
<div class="homeImg"></div>
<div class="flex3">
    <div class="homeSlogan">We Bring Comfort To Justice</div>
    <div class="loginForm">
    
    <form action="index.php" method="POST">
    <input type="text" name="email" placeholder="Email" class="inputStyle" value="<?php echo $email;?>">
    

    <input type="password" name="password" placeholder="Password" class="inputStyle" >
    <div class="red-text"><?php echo $errors["passwordOrEmail"] ?></div>

    <input type="submit" value="Login" name="login" class="submitBtn">
    </form>

    
    </div>
</div>
<div class="homePicCover"></div>
</div>

<?php
include 'footer.php';
?>
<script src="jquery.min.js"></script>

<script>
$('.login-cnt').css('display','none');

</script>
</body>
</html>
