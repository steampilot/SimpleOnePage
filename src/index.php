<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>Start Bootstrap</a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>About</a>
        </li>
        <li>
            <a href="#partner" onclick=$("#menu-close").click();>Partner</a>
        </li>
        <li>
            <a href="#impressions" onclick=$("#menu-close").click();>Impressions</a>
        </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
        </li>
    </ul>
</nav>
<div id="plane" class="parallax-container"
     data-parallax="scroll"
     data-bleed="0"
     data-z-index="-200"
     data-image-src="assets/img/banner/space_invader.jpg">
    <section class="container">

        <div id="banner" class="parallax-container"
             data-parallax="scroll"
             data-z-index="-100"
             data-bleed="0"
             data-natural-width="650"
             data-natural-height="366"
             data-image-src="<?= getRandomBanner(); ?>">

            <div id="start" class=" col-lg-4 pull-right  text-vertical-center">
                <object id="logo" width="100%" type="image/svg+xml"
                        data="assets/img/orca-logo.svg">
                    Your browser does not support SVG
                </object>


            </div>
            <div class="col-lg-12 text-vertical-center">
                <h1>The Web starts with us</13>
            </div>
        </div>

    </section>
    <!-- Container-->
    <?php require_once "about.php"; ?>


    <!-- About -->


    <!-- Header -->
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="partner" class="partner bg-primary spc-orca-4 spc-inverse">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Our Partners and Clients</h2>

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Partner Name</strong>
                                </h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Client Name</strong>
                                </h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Client Name</strong>
                                </h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                                </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div id="callout" class="text-vertical-center parallax-container"
             data-parallax="scroll"
             data-bleed="50" data-image-src="assets/img/impressions/coffee_drop.jpg"
             data-z-index="-50"
             data-natural-width="650"
             data-natural-height="366">
            <h1 class="animated bounce infinite">Come and get your coffee</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="impressions" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/blue_willy.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/blue_willy.jpg 1800w,
                                             assets/img/impressions/mid/blue_willy.jpg  800w,
                                             assets/img/impressions/min/blue_willy.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/blue_willy.jpg"
                                         alt="Blue Willy"/>
                                </a>
                            </div>
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/clothes_rack.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/clothes_rack.jpg 1800w,
                                             assets/img/impressions/mid/clothes_rack.jpg  800w,
                                             assets/img/impressions/min/clothes_rack.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/clothes_rack.jpg"
                                         alt="Clothes Rack"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/nian_cat.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/nian_cat.jpg 1800w,
                                             assets/img/impressions/mid/nian_cat.jpg  800w,
                                             assets/img/impressions/min/nian_cat.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/nian_cat.jpg"
                                         alt="Nian Cat"/>
                                </a>
                            </div>
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/space_invader.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/space_invader.jpg 1800w,
                                             assets/img/impressions/mid/space_invader.jpg  800w,
                                             assets/img/impressions/min/space_invader.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/space_invader.jpg"
                                         alt="Space Invader"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/code_buddha.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         src="assets/img/impressions/code_buddha.jpg"
                                         alt="Bright Wall"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/bright_wall.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/bright_wall.jpg 1800w,
                                             assets/img/impressions/mid/bright_wall.jpg  800w,
                                             assets/img/impressions/min/bright_wall.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/bright_wall.jpg"
                                         alt="Bright Wall"
                                </a>
                            </div>
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/coffee_drop.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/coffee_drop.jpg 1800w,
                                             assets/img/impressions/mid/coffee_drop.jpg  800w,
                                             assets/img/impressions/min/coffee_drop.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/bright_wall.jpg"
                                         alt="Coffee Drop"
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/sound_beat.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/sound_beat.jpg 1800w,
                                             assets/img/impressions/mid/sound_beat.jpg  800w,
                                             assets/img/impressions/min/sound_beat.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/sound_beat.jpg"
                                         alt="Sound Beat"
                                </a>
                            </div>
                            <div class="animated rotateIn portfolio-item">
                                <a href="assets/img/impressions/system_plant.jpg" target="_blank">
                                    <img class="img-portfolio img-responsive"
                                         srcset="assets/img/impressions/max/system_plant.jpg 1800w,
                                             assets/img/impressions/mid/system_plant.jpg  800w,
                                             assets/img/impressions/min/system_plant.jpg  300w"
                                         sizes="1800w, 800w, 300w"
                                         src="assets/img/impressions/system_plant.jpg"
                                         alt="System Plant"
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <a href="#" class="btn btn-dark">View More Items</a>
        </div>
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary spc-orca-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>


    <section id="contact" class="container ">
        <div class="row spc-orca-0 spc-inverse">
            <address id="address" class="col-lg-4 col-md-4 col-xs-8
                           text-center pull-right spc-orca-4 spc-inverse">

                                    <span class="fa-stack fa-4x">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-compass fa-stack-1x text-primary"></i>
                                </span>
                <h4>
                    <strong>Contact</strong>
                </h4>

                <p><strong>Company Name</strong>
                    Streetname Nr#</br>
                    PO Boxnumber</br>
                    Cityname</br>
                    Countryname
                </p>

                <a href="#" class="btn btn-light">Learn More</a>
            </address>
            <div id="map" class="col-lg-8 col-md-8 col-xs-4 ">
                <div id="map_canvas" class="Flexible-container">
                </div>
                <div id="map_button"><a href="#gogogoogle" class="btn btn-dark btn-lg">Open Map</a></div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <section>
            <div class="container">
                <section class="col-md-3">
                    <article class="tweet">

                        <div class="panel">
                            <div class="panel panel-title">
                                Orca Willy Twitter <em>Apr 16, 2015</em>
                            </div>
                            <p>Seit heute morgen wieder genug Luft.
                            </p>
                        </div>

                    </article>
                    <p class="padd-bott">
                        Let everyone know about ORCA.
                    </p>
                    <section class="">
                        <span class="">
                        <i class="fa fa-facebook-square fa-fw fa-lg"></i>
                            Like it
                                </span>

                    </section>
                    <section class="">
                        <span class="">
                        <i class="fa fa-pinterest-square fa-fw fa-lg"></i>
                            Pin it
                                </span>

                    </section>
                    <section class="">
                        <span class="">
                        <i class="fa fa-twitter-square fa-fw fa-lg"></i>
                            Tweet about
                                </span>

                    </section>
                    <section class="">
                        <span class="">
                        <i class="fa fa-google-plus-square fa-fw fa-lg"></i>
                            Share it
                                </span>

                    </section>


                </section>

                <section class="col-md-6">
                    <h2>Our Team</h2>
                    <ul>
                        <li>
                            <strong>
                                Rolf Gerber
                            </strong>
                            <em>CEO</em>
                        </li>
                        <li>
                            <strong>Marc Würth</strong>
                            <em>Head of Development</em>
                        </li>
                        <li>
                            <strong>
                                Dino Fellmann
                            </strong>
                            <em>Design and Projectmanagement</em>
                        </li>
                        <li>
                            <strong>Daniel Opitz</strong>
                            <em>Development and Education</em>
                        </li>
                        <li>
                            <strong>
                                Jérôme Röthlisberger
                            </strong>
                            <em>Junior Developer</em>
                        </li>
                    </ul>
                </section>
                <section class="col-md-3">
                    <address>
                        <h4>ORCA Services AG</h4>

                        <p><em>Hauptsitz</em><br/>
                            Bahnofstrasse 11</br>
                            4133 Pratteln</br>
                            Schweiz
                        </p>
                    </address>
                    <address>
                        <h4>ORCA Solution AG</h4>
                        <em>Body Leasing</em>
                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <small>Vertretung in Basel</small>
                                    <br/>
                                    Aechengraben 10</br>
                                    4010 Basel</br>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <small>Vertretung in Zürich</small>
                                    <br/>
                                    Flurstrasse 74</br>
                                    8048 Zürich
                                </p>
                            </li>
                        </ul>

                    </address>
                </section>
            </div>
        </section>
    </footer>

    <!-- div#plane.paralax-container -->
</div>
</body>
