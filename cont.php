<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  <?php
  if ($_SERVER) {
          include 'dbconn.php';
          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $email = $_POST["email"];
          $phonenumber = $_POST["phonenumber"];
          $message =$_POST["message"];
           
                 
          $sql = "INSERT INTO `contactus` (`firstname`, `lastname`,`email`, `phonenumber`,`message`) VALUES ('$firstname','$lastname', '$email','$phonenumber','$message' )";
              
          $result = mysqli_query($conn, $sql);
        
            if ($result) {
                
           var_dump($result);
            $showalert = true;
              echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your account is now created and you can login
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
              <a href="signin.php" class= "btn btn-primary">go to signin</a>
          </div> ';
          
        }
          if (isset($_POST['email'])) {

            $insData = mysqli_query($conn, "INSERT INTO `contactus`(`email`) VALUES('$email')") or die(mysqli_error($conn));
        
        }
      
          
     }    
      
  

   
    
?> 
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>