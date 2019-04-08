<?php
include("database.php");
$conn = new mysqli($host, $user, $password, $database);
if($conn->connect_errno > 0){
    die('Unable to connect to database'. $conn->connect_error);
}else{
    echo "Connected";
}
?>