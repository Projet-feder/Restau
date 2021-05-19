
        
                    
<?php require '../components/menu.php' ?>
<!--actualite-->
<div id="actualite" class="actualite-area col-lg-12 col-md-12 col-sm-12 ">                  
    <div id="carouselControl" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        
            
            <div class="carousel-item">
                <img src="../images/Actualite/1.jpg" class="d-block w-100" alt="...">
                <h3>
                    We've been Making The Delicious Foods Since 1999

                </h3>
                <div class="content-holder">
                <div class="content-holder col-md-12 col-lg-12 col-sm-12">
                    <button type="button" class="btn btn-primary" id="btn" data-bs-toggle="modal" data-bs-target="#TableReservation">
                        Reservate a Table  
                    </button>
                </div>
            </div>
            <?php
                echo "<div class=\"carousel-item active\">
                    
            
           
            </div>
                </div>" ; 
            ?>
            <div class="carousel-item">
                <img src="../images/Actualite/161011_xe44c_mlarge_restaurant_serveur_sn1250.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>                 
                
</div>
            
                

    <!-- ABOUT -->
    <div class="content">
        <div id="about" class="about-area row" data-stellar-background-ratio="0.5">
            <div class="container row">
                    <div class="title">
                            <h2>About</h2>
                            <span></span>
                            <span></span>
                     </div>
                        <div class="text-holder col-md-6 col-sm-12">
                                    <div class="about-info">
                                        <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                            <h2>We've been Making The Delicious Foods Since 1999</h2>
                                        </div>

                                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                                            <p>Bienvenue dans notre réstaurant ! c’est l’héritage de la cuisine turque dans son coté généreux et savoureux qui caractérisent nos plats.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="image-holder col-md-6 col-sm-12">
                                    <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                                        <img src="../images/Historique/about-image.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                                
                        </div>
                    
                </div>

                <!--Service-->
                <div id="service" class="service-area row ">
                    
                    <div class="title">
                        <h2>Services</h2>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="content-holder row">
                        <div class="col-md-8">
                            <div class="row zoom image1">
                                <div class="menu-item">
                                            <h3>Breakfast</h3>
                                                <p>Coffee / Eggs / Brunch</p>
                                            </div>
                                </div> 
                            <div class="cont1 row">
                                <div class="image2 zoom col-md-6">
                                        <div class="menu-item">
                                             <h3>Dinner</h3>
                                             <p>Green / Fruits / Healthy</p>
                                        </div>
                                       
                                </div>       
                                <div class="image3 zoom col-md-6"> 
                                        <div class="menu-item">
                                             <h3>Dessert</h3>
                                             <p>Ice Cream / Fruits / Healthy</p>
                                        </div>
                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image4 zoom ">
                                        <div class="menu-item">
                                             <h3>Delevery</h3>
                                             <p>Plat / Breakfast / Dessert</p>
                                        </div>
                            </div>
                                        
                        </div>
                
                    </div>
                </div>

                 <!--contact-->
                <div id="contact" class="contact-area row">
                    <div class="title">
                        <h2>Contact</h2>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="content-holder row">
                        <div class="wow fadeInUp col-lg-6 col-xl-6 col-md-6 col-sm-12" data-wow-delay="0.4s">
                        
                            <div class="gmap_canvas">
                                <iframe width="100%" height="450px" id="gmap_canvas" src="https://maps.google.com/maps?q=upper%20coffe&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                     
                            
                            </div>  
                            
                    
                        </div>  

                        <div class="wow fadeInUp col-lg-6 col-xl-6 col-md-6 col-sm-12">

                            <div class="col-md-12 col-sm-12">
                                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                    <h4>Send mail</h4>
                                </div>
                            </div>

                            <!-- CONTACT FORM -->
                            <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                                <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                                <h6 class="text-success">Your message has been sent successfully.</h6>
                                
                                <!-- IF MAIL NOT SENT -->
                                <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                                <div class="col-md-6 col-sm-6">
                                    <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                    <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                    <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                                </div>
                            </form>
                        </div>

                        
                        
                    </div>
                </div>

              <?php include '../components/footer.php' ?>
          
   </div>
     

