<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    // echo "Connected Successfully";
} else {
    echo "something Went Wrong.".die($conn);
}
