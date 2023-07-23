<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>







     <!-- add icon link -->
  
  <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon.jpeg">
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style.css">
<!--google fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=Raleway&display=swap" rel="stylesheet"
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(190, 184, 184);">
   <?php require "header.php";?>
    <!--contact us form section-->
    <br>
    <br>
    <div class="container-fluid" style="display: flex;">
        <div class="row" style="background-color: bisque;height: 500px;width: 100%
        ;margin-left: 30px;margin-right: 30px;margin-top: 40px;"  >
            <div class="col-md-8 col-sm-12" style="background-color: gray;" id="shadow">
            <form action="/Electrofix/cont.php" method="post">
                <center><h1 style="margin-bottom: 5px;margin-top: 5px;" >Send a Message</h2></center>
                <div class="row" style="margin: auto;">
                  <div class="col" >
                    <input type="text" class="form-control" placeholder="First name" style="height: 3rem; width: 100%;margin: 3px;" name="firstname">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" style="height: 3rem; width: 100%;margin: 3px;"  name="lastname">
                  </div>
                </div>
           <br>
                <div class="row" style="margin: auto;">
                  <div class="col">
                    <input type="email" class="form-control" required placeholder="Email*" style="height: 3rem; width: 100%;margin: 3px"  name="email">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" required placeholder="Phone number*" style="height: 3rem; width: 100%;margin: 3px"  name="phonenumber">
                  </div>
                </div>
                <br>
                <div>
                    <center><textarea class="form-control"  placeholder="Write you Messages"  style="margin-left: 10px;height: 10rem;"  name="message"></textarea></center>
                </div>
                <br>
                <div class="col-sm-12" style="margin-left: 14px;margin-bottom: 4px;"><button type="submit" class="btn btn-warning btn-lg col-sm-12">Get free Quote now</button></div>
            </div>

        </form>
        <br>

            <div class="col-md-4 col-sm-12  d-none d-md-none d-xl-block " style="background-color: gainsboro;" id="shadow">
              
            <h2 class="mt-3" style="font-weight: 600;margin-bottom: 10px; color: gray
            ;">
              Contact Info</h2>
              <center>
            <a>
                <span class="fa fa-map-marker-alt fa-2x" style="margin-right: 10px"></span>
                <span style="font-size: 25px;font-weight: 600;">Abid market.Lahore </span>
            </a>
            <hr>
            <a class="mt-5">
                <span class="fa fa-phone fa-2x"  style="margin-right: 10px"></span>
                <span style="font-size: 25px;font-weight: 700;">+923114531093 </span>
            </a>
            <hr>
            <a class="mt-5">
                <span class="fa fa-envelope fa-2x" style="margin-right: 10px"></span>
                <span style="font-size: 25px;font-weight: 600;">electrofixbusiness@gmail.com </span>
            </a>
            <hr>
            <a class="mt-2">
                <span class="fa fa-clock fa-2x" style="margin-right: 10px"></span>
                <span style="font-size: 25px;font-weight: 600;">Mon-Sat : 9:00am-8:00pm
            </a>
            <hr>
            <div class="top-header-right">
              <ul class="social- mr-5 mt-3">
                  <li class="social-google">
                  <a href="https://google.com" target="_blank" rel="nofollow"><i class="fa fa-google fa-2x"  id="icon"></i></a>
              </li>
              <li class="social-facebook">
                  <a href="https://www.facebook.com" target="_blank" rel="nofollow"><i class="fa fa-facebook fa-2x"  id="icon1"></i></a>
              </li>
              
              <li class="social-youtube">
                  <a href="https://www.youtube.com" target="_blank" rel="nofollow"><i class="fa fa-youtube-play fa-2x"  id="icon2"></i></a>
              </li><li class="social-twitter">
                  <a href="https://www.twitter.com" target="_blank" rel="nofollow"><i class="fa fa-twitter fa-2x" id="icon3"></i></a>
              </li>
          </ul>
          </div>
          </center>
            </div> 
        </div>
    </div>
   <!--map-section--->
   <div class="container-fluid">
     <div class="row" style="height: auto;background-color: black;margin-top: 70px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.2718654975065!2d74.34543455018316!3d31.461706781297767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919068fc486de5b%3A0xedb4208529a1f59e!2sAbid%20Market!5e0!3m2!1sen!2s!4v1614404490535!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
   </div>
   <?php require "footer.php"?>
   <!--info section-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4ab816f9ad.js" crossorigin="anonymous"></script>   
</body>
</html>