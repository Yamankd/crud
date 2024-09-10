<?php
include "connect.php";


$name = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$ph = $_POST['phone'];
$gender = $_POST['gender'];
$country = $_POST['country'];


echo $name,"<br>";
echo $email,"<br>";
echo $pass,"<br>";
echo $ph,"<br>";
echo $gender,"<br>";
echo $country,"<br>";
?>
