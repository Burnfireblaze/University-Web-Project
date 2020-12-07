<?php
session_start();
session_destroy();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMS Tours & Travels</title>

    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        .mvpvideo{
            padding-bottom: 100px;
            padding-top: 100px;
        }
    </style>
      </head>

      <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
            <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand" href="#">
                                <img src="img/logo.jpg" alt="Site logo" height="80" width="80">
                                SMS Tours & Travels
                            </a>                            
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed btn btn-nav" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                          <a class="nav-link active" href="#"><h6>Home</h6><span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#tm-section-3"><h6>Profile</h6></a>
                                    </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#tm-section-2"><h6>Booking</h6></a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="./news.html"><h6>News</h6></a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="#tm-section-3"><h6>About US</h6></a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" href="./contact.html"><h6>Contact</h6></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="./login.html"><h6>Login</h6></a>
                                    </li>
                                  </ul>
                        </div>                            
                    </nav>
                </div>
            </div>
        </div>

        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container">
                        <div class="row tm-banner-row tm-banner-row-header">                        
                            <div class="col-xs-12">                        
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title"><?php echo "Welcome ".$_SESSION["username"]; ?> Let's begin!</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                    <p class="tm-banner-subtitle">Start Booking Your Dream Trip!
                                    <a href="logout.php" style="text-align:left;"> LOGOUT </a>
                                    </p>
                                    <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>
                                </div>    
                            </div>                 
                        </div>
                        <div class="row tm-banner-row" id="tm-section-search">

                            <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">                                
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="inputCity">Choose Your Destination</label>
                                        <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-1">                                    
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                            <label for="inputRoom">How many rooms?</label>
                                            <select name="room" class="form-control tm-select" id="inputRoom">
                                                <option value="1" selected>1 Room</option>
                                                <option value="2">2 Rooms</option>
                                                <option value="3">3 Rooms</option>
                                                <option value="4">4 Rooms</option>
                                                <option value="5">5 Rooms</option>
                                                <option value="6">6 Rooms</option>
                                                <option value="7">7 Rooms</option>
                                                <option value="8">8 Rooms</option>
                                                <option value="9">9 Rooms</option>
                                                <option value="10">10 Rooms</option>
                                            </select>                                        
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">                                       
                                            <label for="inputAdult">Adult</label>     
                                            <select name="adult" class="form-control tm-select" id="inputAdult">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>                                        
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                                            <label for="inputChildren">Children</label>                                            
                                            <select name="children" class="form-control tm-select" id="inputChildren">
                                            	<option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <label for="inputCheckIn">Check In Date</label>
                                        <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <label for="inputCheckOut">Check Out Date</label>
                                        <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="btnSubmit">&nbsp;</label>
                                        <button type="submit" class="btn btn-primary tm-btn tm-btn-search text-uppercase" id="btnSubmit">Check Availability</button>
                                    </div>
                                </div>                              
                            </form>
                            <div class="mvpvideo">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/FTQXntKAuPY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>                             

                        </div>
                        <div class="tm-banner-overlay"></div>
                    </div> 
                </div>                 
            </section>

            <footer class="tm-container-fluid">
                <div class="row">             
                    <div class="col-4 offset-1 col-sm-2">
                        <h4>Links</h4>
                        <ul class="list-unstyled">
                            <h6>
                                <li><a href="./index.html">Home</a></li><br>
                                <li><a href="#">Profile</a></li><br>
                                <li><a href="#">Booking</a></li><br>
                            <li><a href="./aboutus.html">About US</a></li><br>
                            <li><a href="./contact.html">Contact</a></li>
                            </h6>
                        </ul>
                    </div>
                    <div class="col-7 col-sm-5">
                        <h4>Our Address</h4>
                        <address class="text-light"><h6>
                            121, Clear Water Bay Road<br>
                            Clear Water Bay, New Delhi,<br>
                            INDIA<br><br>
                            <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                            <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br><br>
                            <i class="fa fa-envelope fa-lg"></i>: 
                            <a class="text-light bg-dark" href="mailto:support@smstoursandtravels.com">support@smstoursandtravels.com</a>
                        </h6>
                       </address>
                    </div>
                    <div class="col-12 col-sm-4 align-self-center">
                        <div class="text-center">
                            <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                            <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                            <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                            <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
               </div>
               <div class="row justify-content-center">             
                    <div class="col-auto">
                        <p  style="color:black"><h5>© Copyright 2020 SMS Tours & Travels</h5></p>
                    </div>
               </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>                 
    <script src="js/datepicker.min.js"></script> 
    <script src="slick/slick.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>     
    <script> 
 
        $(function(){
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 100) {
                    $(".tm-top-bar").addClass("active");
                } else {                    
                 $(".tm-top-bar").removeClass("active");
                }
            });

            $('.tm-down-arrow-link').click(function(){
                $.scrollTo('#tm-section-search', 300, {easing:'linear'});
            });

            var pickerCheckIn = datepicker('#inputCheckIn');
            var pickerCheckOut = datepicker('#inputCheckOut'); 
        });
    </script>             

</body>
</html>