 
<!doctype html>
<html lang="en">
  <head>
    <title>signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">



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
      <div class="row" style="  height: auto;">
        <div style="background-color:grey;height:100vh" class="col-md-4 d- ">
           <h4  style="   font-family: 'Tourney', cursive;
" class="mt-5 ml-2 display-4">Electrofix</h4>
           <h4 class="mt-4 display-5" style=" font-size:40px;"> Join our community</h4> 
            
      </div>
        <div class="col-md-8 col-sm-12"  style="color:black; display:flex;justify-content:center;align-items:center;" Required>  
        <form action="/Electrofix/view.php" method="post">

      <h2 style="color:black" class="mb-4">Sign up  to Electrofix</h2>
      <div style="display:flex; ">
        <div >
        <label for="name" >Name </label>
        <br>
        
        <input type="text" id="name" name="name" style='padding:4px;font-size:20px' >
        </div>
        <div  class="ml-2">
        <label for="username">Username</label>
        <br>
        <input type="text" id="username" name ="username" style='padding:4px;font-size:20px'></div>
        
      </div>
       
      <div >
      <label for="email" >Email</label>
      <br>
      <input type="email" id="email" style="width:100%;padding:4px;font-size:20px" name="email" >
 </div>
      <div >
      <label for="password" >Password</label>
      <br>
      <input type="password" id="password" style="width:100%;padding:4px;font-size:20px" name="password">
 </div>
      <div >
      <h4 class="mt-3">Already have an account? <a href="signin.php">Sign in</a></h4>
 </div>
       <div class="col-md-4">
     <button href="" type="submit" class="btn btn-primary mt-4"  style="width:70%;height:40px">Submit</button>
     </div> 
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