<!doctype html>
<html lang="en">

<head>
    <title>Appointment</title>


 <!-- add icon link -->
  
 <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon.jpeg">
 




    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=Raleway&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
        
<?php require "header.php"?>
    <div class="container-fluid">
     
        <div class="row register">

            <div class="col-sm-3">

            </div>
            <div class=" col-sm-9 reg">
                <form>

                    <div class="form-group ">
                        <label class="col-sm-4 " style="color: rgb(68, 72, 204);">Name<sup>*</sup></label>
                        <div class="col-sm-8 ">
                            <input type="text " class="form-control " id="fname " placeholder="Enter your full Name ">

                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">Phone<sup>*</sup></label>
                        <div class="col-sm-8 ">
                            <input type="number " class="form-control " id="mnum ">

                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">Email</label>
                        <div class="col-sm-8 ">
                            <input type="email " class="form-control " id="uemail ">

                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">Address<sup>*</sup></label>
                        <div class="col-sm-8 ">
                            <input type="text " class="form-control " id="uadd ">

                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">City</label>
                        <div class="col-sm-8 ">
                            <input type="text " class="form-control " id="city ">

                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">Service</label>
                        <div class="col-sm-8 " >
                            <select id="service" class="form-control" style="height: 40px;font-size: 1rem;">
                                <option selected value="default">Select Service</option>
                                <option >Washing mashine repair</option> 
                                <option >Refrigerator Repair</option> 
                                <option >Air conditioner repair</option> 
                                <option >Dishwasher repair</option> 
                                <option >LED repair</option> 
                                </select>


                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">Date<sup>*</sup></label>
                        <div class="col-sm-8 ">
                            <input type="date " class="form-control " id="date " placeholder="dd /mm / yyyy ">

                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col-sm-4 "  style="color: rgb(68, 72, 204);">Time<sup>*</sup></label>
                        <div class="col-sm-8 ">
                            <input type="time " class="form-control " id="time " placeholder="----:---- ">

                        </div>
                    </div>


                    <div class="form-group ">
                        <div class="col-sm-offset-4 col-sm-8 ">
                            <button type="submit " class="btn btn-dark ">Submit</button>
                          <button type="submit " class="btn btn-dark "><a href="./services.php"  style="text-decoration:none;color: black;">back</a> </button>
                        </div>

                    </div>


                </form>

            </div>
            <div class="col-sm-3 ">

            </div>


        </div>

    </div>
   <?php require "footer.php";?>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <script src="https://kit.fontawesome.com/4ab816f9ad.js" crossorigin="anonymous"></script>  
</body>

</html>