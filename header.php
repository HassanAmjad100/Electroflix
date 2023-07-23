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
      
  <body>
  <div class="container-fluid">
    <div class="col"></div>
    <div class="row" id="row">
        <div class="top-header-left d-none d-md-none d-xl-block ml-5 mt-3">
            <span class="aux-text">
                <span class="top-contact-info ml-5"><i class="fa fa-phone"></i><small style="font-size: 15px;"><a id="info">+92 3124841030 | +92 3114531093 | +92 3314652191</a></small></span>
            <span class="top-contact-info ml-1"><i class="fa fa-envelope"></i><small  style="font-size: 15px;"><a id="info1">electrofixbusiness@gmail.com</a></small></span>
        </span>
        </div>
        <div class="col"></div>
        <div class="top-header-right mr-5">
            <ul class="social- mr-5 mt-3">
                <li class="social-google">
                <a href="https://google.com" target="_blank" rel="nofollow"><i class="fa fa-google "  id="icon" style="font-size: 20px;"></i></a>
            </li>
            <li class="social-facebook">
                <a href="https://www.facebook.com" target="_blank" rel="nofollow"><i class="fa fa-facebook"  id="icon1"  style="font-size: 20px;"></i></a>
            </li>
            
            <li class="social-youtube">
                <a href="https://www.youtube.com" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"  id="icon2"  style="font-size: 20px;"></i></a>
            </li><li class="social-twitter">
                <a href="https://www.twitter.com" target="_blank" rel="nofollow"><i class="fa fa-twitter " id="icon3"  style="font-size: 20px;"></i></a>
            </li>
        </ul>
        </div>
        <div class="col-1"></div>   
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-light bg-light"id="nav">
    <img src="pic/logo1 (1).jpeg" id="logo" alt="">
    
 <a class="navbar-brand" href="./HOME.php">Electrofix</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pny">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="pny">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item active">
       <a class="nav-link acative" href="HOME.php" style="font-size: 20px; font-weight: 600;">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="./about.php" style="font-size: 20px; font-weight: 600;">About us</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="./services.php" style="font-size: 20px; font-weight: 600;">Services</a>
     </li>
     <li class="nav-item">
       <a class="nav-link " href="./contact_us.php" style="font-size: 20px; font-weight: 600;">Contact Us</a>
     </li>
     <li class="nav-item btn btn-outline-danger btn-sm">
       <a class="nav-link"  href="signup.php" style="font-size: 20px; font-weight: 600;">Sign up</a>
     </li>
     <li class="nav-item btn btn-outline-primary btn-sm ml-2">
     <?php
   
if (isset($_SESSION['email'])) {
 echo '<a class="nav-link"  href="./logout.php" style="font-size: 20px; font-weight: 600;">Sign Out</a>';
}else{
  echo '<a class="nav-link"  href="./signin.php" style="font-size: 20px; font-weight: 600;">Sign in </a>';
}
     
     ?>
       <!-- <a class="nav-link"  href="./signin.php" style="font-size: 20px; font-weight: 600;">Sign in </a> -->
     </li>
   </ul>
 </div>
</nav>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>