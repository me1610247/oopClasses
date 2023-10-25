<?php
include("validations.php");
$email = "test@example.com";
if (Validation::validateEmail($email)) {
    echo "Email is valid. <br>";
} else {
    echo "Email is invalid. <br>";
}

$username = "user123";
if (Validation::validateUsername($username)) {
    echo "Username is valid. <br>";
} else {
    echo "Username is invalid. <br>";
}

$password = "password123";
if (Validation::validatePassword($password)) {
    echo "Password is valid. <br>";
} else {
    echo "Password is invalid. <br>";
}
$phone = "01003276440";
if(Validation::validatePhone($phone)){
    echo "Phone Number is Valid. <br>";
}else{
    echo "Phone Number is invalid. <br>";
}
?>