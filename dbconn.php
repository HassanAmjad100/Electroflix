<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "electrofixre";
//create connection 
$conn = new mysqli($servername,$username,$password,$db);
//check the connection
if (!$conn) {
    die("Connection failed:".mysqli_error());
}
echo "conected";


   ?>

  