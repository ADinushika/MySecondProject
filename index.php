<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Amali</title>

        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>


        <!-- Header -->
        <?php
        include 'header.php';
        ?>



        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3><a class="scrollto" href="#">ADcreations</a></h3>

                </div>
                <div id="myNavbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="menu-active"><a href="index.php"><h5><strong>HOME</strong></h5></a></li>
                        <li class=""><a href="about_us.php"><h5><strong>ABOUT US</strong></h5></a></li>
                        <li class=""><a href="#myPage"><h5><strong>SERVICES</strong></h5></a></li>
                        <li class=""><a href="gallery.php"><h5><strong>GALLERY</strong></h5></a></li>
                        <li class=""><a href="alert.php"><h5><strong>REGISTER</strong></h5></a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Header -->

        <div class="intro-container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->


                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/image1.jpeg" alt=""/>
                        <div class="carousel-caption">
                            <h1>Welcome to AD Creations</h1>
                            <p><h3>We are team of talanted designers making websites with Bootstrap</h3></p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/image2.jpeg" alt=""/>
                        <div class="carousel-caption">
                            <h1>Welcome to AD Creations</h1>
                            <p>We are team of talanted designers making websites with Bootstrap</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/image3.jpeg" alt=""/>
                        <div class="carousel-caption">
                            <h1>Welcome to AD Creations</h1>
                            <p>We are team of talanted designers making websites with Bootstrap</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/image4.jpeg" alt=""/>
                        <div class="carousel-caption">
                            <h1>Welcome to AD Creations</h1>
                            <p>We are team of talanted designers making websites with Bootstrap</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="images/image5.jpeg" alt=""/>
                        <div class="carousel-caption">
                            <h1>Welcome to AD Creations</h1>
                            <p>We are team of talanted designers making websites with Bootstrap</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>

        <!-- Container (About us) -->
        <div class="container text-justify">
            <div class="row">
                <h2><center>About Us</center></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo</p>
                <br>
                <center><img src="images/people.jpg" alt=""/></center>
            </div>
        </div>

        <!-- Container (Services) -->
        <section id="contact">
            <div class="container text-center">
                <header class="section-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <h2>Services</h2>

                    <h4>What we offer</h4>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-off logo-small"></span>
                            <h4><strong>POWER</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-heart logo-small"></span>
                            <h4><strong>FRIENDLY</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-lock logo-small"></span>
                            <h4><strong>JOB DONE</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-leaf logo-small"></span>
                            <h4><strong>GREEN</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-certificate logo-small"></span>
                            <h4><strong>CERTIFIED</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-wrench logo-small"></span>
                            <h4 ><strong>HARD WORK</strong></h4>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>
                </header>
            </div>

        </section>
        <br>
        <br>
        <br>

        <!-- Container (Team) -->
        <div class="container-fluid text-center bg-grey">

            <h2>Team</h2>

            <h4>Our Team</h4>
            <br>
            <br>

            <div class="row text-center">
                <div class="col-sm-3">
                    <div class="thumbnail" >
                        <img src="images/people1.jpg" alt="" width="75%">
                        <h3><strong>Walter White</strong></h3>
                        <p>Managing Director</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="images/people3.jpg" alt="" width="75%">
                        <h3><strong>Sarah Jonson</strong></h3>
                        <p>Executive Officer</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="images/people2.jpg" alt="" width="75%">
                        <h3><strong>Jamaes Wotson</strong></h3>
                        <p>Product Manager</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src="images/people5.jpg" alt="" width="75%">
                        <h3><strong>Emma Wotson</strong></h3>
                        <p>Chief Accountant</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>

    <!-- Container (Contact) -->

    <section id="contact" class="section-bg wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="row">
            <div class="container text-justify">

                <div class="section-header">
                    <h2><center>Contact Us</center></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>    
                </div>

                <div class="row contact-info">
                    <div class="col col-md-4">
                        <div class="contact-address">
                            <i class=" 	fa fa-map-marker"></i>
                            <h3>Address</h3>
                            <address>A108 Adam Street, NY 535022, USA</address></address>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="contact-phone">
                            <i class="fa fa-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+941155443322">+94 1 155443322</a></p>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="contact-email">
                            <i class="fa fa-envelope-o"></i>
                            <h3>E mail</h3>
                            <p><a href="mailto:info@gmail.com">info@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank You</div>
                    <form class="contactForm" action="" method="post" role="form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="name" class="form-control" name="name" placeholder="Your Name" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <input id="email" class="form-control" name="email" placeholder="Your Email" type="text">
                            </div>
                            <div></div>
                            <div></div>
                        </div>
                        <div class="form-group">
                            <input id="subject" class="form-control" name="subject" placeholder="Subject" type="text">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn-success">Send Message</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

    <footer id="footer">
        <div class="footer-top">
            <div class="container text-justify">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>ADcreations</h3>  
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.

                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Usefull Links<hr></h4>
                        <ul>
                            <li><i class="fa fa-chevron-right"></i>
                                <a href="#">Home</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i>
                                <a href="#">About Us</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i>
                                <a href="#">Services</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i>
                                <a href="#">Team</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us<hr></h4> 
                        <p>
                            No.205
                            <br>
                            Bokundara
                            <br>
                            Piliyandala
                            <br>
                            Sri Lanka
                            <br>
                            <strong>Phone:</strong>
                            +94 1 234 514 785
                            <br>
                            <strong>Email:</strong>
                            info@gmail.ocm
                            <br>
                        </p>
                        <div class="social-links">
                            <a class="twitter" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a class="google-plus" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Our news letter<hr></h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        <form action="" method="post">
                            <input name="email" type="email">
                            <input value="subscribe" type="submit">
                        </form>
                    </div>
                </div>

            </div>
        </div> 
        <div class="container">
            <div class="copyright"><i class="glyphicon glyphicon-copyright-mark"></i>
                Copyright
                <strong>ADcreations</strong>
                .All Rights Reserved
            </div>
            <div class="credits">
                Designed By 
                <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>
    <!-- /Footer -->

    <a class="back-to-top" href="#" style="">
        <i class="fa fa-chevron-up" style="margin-top: 12px"></i></a>

    <?php
    // put your code here
    ?>
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
