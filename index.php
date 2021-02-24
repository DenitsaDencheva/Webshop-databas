<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Webshop</title>
        <link rel="icon" type="image/x-icon" href="assets/img/header-bg.jpg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo.jpeg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Böcker</a></li>
                        <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#team">Om oss</a></li>
                        <li class="nav-item"><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">Kontakta oss</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
       
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Välkommen till vår bokhandel</div>
                <div class="masthead-heading text-uppercase">Duktiga Programmerare</div>
                
            </div>
        </header>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">TOPPLISTAN DATA & IT</h2>
                </div>

                 
                       <?php
                       
                       require_once ("read.php");

                       ?>
                       

                                      
                </ul>
            </div>
        </section> 
            <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Vårt fantastiska team <br><br></h2>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/pic_Vera.jpg" alt="" />
                            <h4>Vera Stepanova</h4>
                            <p class="text-muted">Vera.Stepanova@yh.nackademin.se</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/vera.stepanova"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/vera-stepanova-70a7ab12/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/VeraStepanova"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Denitsa.jpg" alt="" />
                            <h4>Denitsa Dencheva</h4>
                            <p class="text-muted">Denitsa.Dencheva@yh.nackademin.se</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/denitza.dentcheva/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/denitsa-dencheva-362409106/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://github.com/DenitsaDencheva"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontakta oss</h2>
                </div>
                <form action="#contact" id="contactForm" name="sentMessage" novalidate="novalidate" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Ditt namn *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" placeholder="Din e-postadress *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" type="tel" placeholder="Ditt Telefonummer *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="message" placeholder="Ditt meddelande *" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Skicka meddelandet</button>
                    </div>
                </form>
            </div>
        </section>

                    <?php

                     require_once ("contacts.php");

                     ?>
                </form>
            </div>
        </section>
        <!-- Footer-->
       <?php require_once ("footer.php");?>
       
    </body>
    
</html>
