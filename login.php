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

$email = $_REQUEST['email'];
  $pass = $_REQUEST['password'];
 $sql = "SELECT * FROM signup WHERE Email = '$email' AND password = '$pass'";
  if($conn->query($sql)){
      $result = $conn->query($sql);
    session_start();

  }

  if ($result->num_rows > 0) {
       // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['email'] = $row['Email'];
        
        
         }
        // date_default_timezone_set("pakistan/lahore");
       //  $to_email =$_SESSION['email'];
        // $subject = "Rento";
       //  $body = "Hi,".$email." you has been successfully login on Rento at ".date("Y/m/d");
     //    $headers = "From: sender email";
   //  mail($to_email, $subject, $body, $headers);     
   header('Location:http://localhost/Electrofix/home.php.');
    }else{
        echo "invalid  email or password";
        
    }
   


?>