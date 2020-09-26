<?php

$conn = mysqli_connect("localhost","giorgi","test123","digital");
if(!$conn){
    echo "connection error" . mysqli_connect_error($conn);
}

include 'main.php';
$email=$idNumber=$emailConf='';
$errors = array("idNumber"=>"","firstname"=>"","lastname"=>"","email"=>"","confEmail"=>"","password"=>"","Rpassword"=>""); 
if(isset($_POST["register"])){
    $name = $_POST["name"];
    $lastname = $_POST["surname"];
    $email = $_POST["email"];
    $idNumber=$_POST["idNumber"];
    $password = $_POST["password"];
    $passwordR = $_POST["password-r"];
    $emailConf= $_POST["confEmail"];


    if(empty($_POST["name"])){
        $errors["firstname"]="Type Firstname";
    }

    if(empty($_POST["surname"])){
        $errors["lastname"]="Type Lastname";
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors["email"]="Invalid Email";
    }

    if($emailConf!=$email){
        $errors["confEmail"]="Emails Don't Match";
    }



    if(strlen($idNumber)!=11 ){
        $errors["idNumber"]="ID number should consist 11 Digits";
    }
    if( !preg_match("/^\d+$/",$idNumber)){
        $errors["idNumber"]="Only Numbers";
    }

    if(strlen($_POST["password"])<8){
        $errors["password"]="Min 8 Characters";
    }
    if(!preg_match("/^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/",$password)  ){
        $errors["password"]="At least one numeric and Capital letter";
    }

    if(empty($_POST["password"])){
        $errors["password"] = "Don't Leave Empty";
    }

    if($passwordR!=$password){
        $errors["Rpassword"]="Passwordes Don't Match";
    }

    if(!array_filter($errors)){

        $name= $conn->real_escape_string($_POST["name"]);
        $lastname = $conn->real_escape_string($_POST["surname"]);
        $email = $conn->real_escape_string($_POST["email"]);
        // $idNumber = $conn->real_escape_string($_POST["idNumber"]);
        $password = $conn->real_escape_string($_POST["password"]);

        $sql = "INSERT INTO users (name,lastname,email,idCard,password) VALUES('$name','$lastname','$email','$idNumber','$password')";

        mysqli_query($conn,$sql);

            header("Location:index.php");
            session_start();
            $_SESSION["userSes"]=$_POST["username"];
            $_SESSION["passwordSes"]=$_POST["password"];
        }

        

    }


?>

<script>
    
    $('.register-cnt').css('display','none');
    $('.login-cnt').css('display','none');;

</script>
<div class="wholeRegistration">
<div class="regPageCover"></div>
<div class="registrationForm">
    <h1>Registration</h1>
    <form action="registration.php" method="POST">
    
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Your Name" class="reginputStyle">
    <div class="red-text"><?php echo $errors['firstname']; ?></div>

    <label for="surname">Surname</label>
    <input type="text" name="surname" placeholder="Your Surname" class="reginputStyle">
    <div class="red-text"><?php echo $errors['lastname']; ?></div>

    <label for="Email">Email</label>
    <input type="text" name="email" placeholder="Email" class="reginputStyle" value="<?php echo $email;?>">
    <div class="red-text"><?php echo $errors['email']; ?></div>

    <label for="confEmail">Confirm Email</label>
    <input type="text" name="confEmail" placeholder="Confirm Email" class="reginputStyle" value="<?php echo $emailConf;?>">
    <div class="red-text"><?php echo $errors["confEmail"]; ?></div>

    <label for="idreg">ID-Number</label>
    <input type="text" name="idNumber" placeholder="Identity Number" class="reginputStyle" value="<?php echo $idNumber;?>">
    <div class="red-text"><?php echo $errors["idNumber"]; ?></div>

    <label for="pwd">Password</label>
    <input type="password" name="password" placeholder="Password" class="reginputStyle">
    <div class="red-text"><?php echo $errors["password"]; ?></div>

    <label for="r-pwd">Repeat Password</label>
    <input type="password" name="password-r" placeholder="Repeat Password" class="reginputStyle">
    <div class="red-text"><?php echo $errors["Rpassword"]; ?></div>

    <input type="submit" value="Register" name="register" class="registerBtn">
    </form>
   
    
    </div>
    </div>
    <?php
include 'footer.php';
?>
</body>
</html>