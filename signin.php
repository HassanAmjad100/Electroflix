
<!doctype html>
<html lang="en">
  <head>
    <title>signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">


<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
 label{
  color:black;
  font-size:20px;
 }


 </style>
  </head>
  <body>
  
    <div class="container-fluid"  >
      <div class="row" style="  height: 40vh">
        <div style="background-color:grey;height:100vh" class="col-md-4 col-sm-12">
           <h4  style="   font-family: 'Tourney', cursive;
" class="mt-5 ml-2 display-4">Electrofix</h4>
           <h4 class="mt-4 display-5" style=" font-size:40px;">Join our community</h4> 
         
        
      </div>
        <div class="col-md-8 col-sm-12 col-xs-12"  style=" display:flex;justify-content:center;align-items:center;">  
        
        <form action="/Electrofix/login.php" method="post">

           <div >
      <h2 style="color:black;" class="mb-3">Sign in  to Electrofix</h2>
        <div >
        
      <label for="email" >Email</label>
      <br>
      <input type="email" id="email" name="email"  style="width:140%;padding:4px;font-size:20px">
 </div>
      <div >
      <label for="email" >Password</label>
      <br>
      <input type="password" id="password" style="width:140%;padding:4px;font-size:20px" name="password">
 </div>
     
     <button class="btn btn-primary mt-4 ml-1 " style="width:50%;" >Submit</button>
     <h4 class="mt-3">Not Sign-up member? <a href="signup.php">Sign up</a></h4>
       </form>
       
       
       </div>
      </div>
      
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>