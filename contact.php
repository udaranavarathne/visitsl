<!DOCTYPE html>
<?php
        
        if(isset($_POST['click'])
        {
            $first_name = $_POST[fname];
            $last_name= $_POST[lname];
            $email = $_POST[email];
            $subject  = $_POST[subject];
            $msg = $_POST[message];

            $error_msg = "";

            $from = "info@visitsrilankators&travels.com";
            $header = "From:$email\r\n"
            $message = $first_name.' '.$last_name.'\r\n'.$msg;
            $mail = "mohananura1@gmail.com";
            
            if(mail($mail,$subject,$message,$header))
            {
                $error_msg = "Success";
            }
            else
            {
                $error_msg = "Sorry.We failed to send your message. Please try again or use an email we have mentioned.";
            }
        }
        
    ?>
<html lang="en">
    <head>
        <title>Visit Sri Lanka Tours and Travels</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <link rel="stylesheet" href="css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

        <div class="site-wrap">

            <div class="site-mobile-menu">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header class="site-navbar py-1" role="banner">

                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-6 col-xl-2">
                            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0"></a></h1>
                        </div>
                        <div class="col-10 col-md-8 d-none d-xl-block">
                            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                                    <li >
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="gallary.php">Gallary</a>

                                    </li>

                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="about.php">About</a></li>



                                    <li class="active"><a href="contact.php">Contact</a></li>
                                    <!-- <li><a href="contact.php">Book Online</a></li> -->
                                </ul>
                            </nav>
                        </div>

                        <div class="col-6 col-xl-2 text-right">
                            <div class="d-none d-xl-inline-block">
                                <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                                    <li>
                                        <a href="#" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://www.facebook.com/visitsrilankatoursandtravels/" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                                    </li>

                                </ul>
                            </div>

                            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                        </div>

                    </div>
                </div>

            </header>





            <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/beachoo.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">

                        <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                            <h1 class="text-white font-weight-light">Get In Touch</h1>
                            <div><a href="index.php">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Contact</span></div>

                        </div>
                    </div>
                </div>
            </div>  



            <div class="site-section bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 mb-5">



                            <form action="#" class="p-5 bg-white">


                                <div class="row form-group">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label class="text-black" for="fname">First Name</label>
                                        <input type="text" name="fname" id="fname" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black" for="lname">Last Name</label>
                                        <input type="text" name="lname" id="lname" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="email">Email</label> 
                                        <input type="email" id="email" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">

                                    <div class="col-md-12">
                                        <label class="text-black" for="subject">Subject</label> 
                                        <input type="subject" id="subject" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="text-black" for="message">Message</label> 
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." required></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white" id="click" name="click">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12" id="error_message">
                                        <?php
                                            if(isset($error_msg))
                                            {
                                                echo $error_msg;
                                            }
                                        ?>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="col-md-5">

                            <div class="p-4 mb-3 bg-white">
                                <p class="mb-0 font-weight-bold">Address</p>
                                <p class="mb-4">Kandy,Sri Lanka</p>

                                <p class="mb-0 font-weight-bold">Phone</p>
                                <p class="mb-4"><a href="#">0094772363736</a></p>

                                <p class="mb-0 font-weight-bold">Email Address</p>
                                <p class="mb-0"><a href="#">mohananura@yahoo.com</a></p>
								<p class="mb-0"><a href="#">mohananura1@gmail.com</a></p>

                            </div>

                            <div class="p-4 mb-3 bg-white">
                                <img src="images/Yala.jpg" alt="Image" class="img-fluid mb-4 rounded"> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-5">
                                <h6 class="footer-heading mb-4">Visit Sri Lanka Travels and Tours</h6>
                                <p>Enjoy your holiday in Si Lanka with us.</p>
                            </div>



                        </div>
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h3 class="footer-heading mb-4">Navigations</h3>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="list-unstyled">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="packages.php">Packages</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="list-unstyled">
                                        <a href="https://www.tripadvisor.com">
                                            <img src="images/ads/tripad.png"  style="width:50%; height:30%;">
                                        </a>
                                        <a href="https://www.booking.com/index.php?aid=343336&label=operasoft-sdO15-343336&utm_source=Opera&utm_medium=web&utm_campaign=sdO15">
                                            <img src="images/ads/booking-com.png"  style="width:50%; height:30%;">
                                        </a>

                                        <a href="http://www.eta.gov.lk/slvisa/">
                                            <img src="images/ads/visa-process.jpg"  style="width:50%;height:30%;">
                                        </a>

                                    </ul>
                                </div>
                            </div>



                        </div>

                        <div class="col-lg-4 mb-5 mb-lg-0">


                            <div class="mb-5">
                                <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                                <p></p>

                                <form action="#" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            </footer>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>

        <script src="js/main.js"></script>

    </body>
</html>